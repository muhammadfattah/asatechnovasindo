<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleImage;
use App\Models\Catalog;
use App\Models\Contact;
use App\Models\Service;
use App\Models\TeamContact;
use App\Models\User;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{

    public function index()
    {
        $contacts = Contact::first();
        $contacts['team']   = TeamContact::all();
        return view('article.index', [
            'articles'        => Article::latest()->filter(request(['search', 'author']))->paginate(8)->withQueryString(),
            'contacts'        => $contacts,
            'catalog'         => Catalog::first(),
            'footer_services' => Service::orderBy('id', 'asc')->limit(6)->get()
        ]);
    }

    public function show($slug)
    {
        $article = Article::slug($slug)->first();
        if (!$article) {
            return redirect()->to('artikel');
        }
        $contacts = Contact::first();
        $contacts['team']   = TeamContact::all();
        return view('article.detail', [
            'article'         => $article,
            'articles'        => Article::latest()->where('id', '!=', $article->id)->limit(6)->get(),
            'contacts'        => $contacts,
            'catalog'         => Catalog::first(),
            'footer_services' => Service::orderBy('id', 'asc')->limit(6)->get()
        ]);
    }

    public function article()
    {
        if (auth()->user()->role == 'super admin') {
            $articles = Article::all();
        } else {
            $articles = Article::mine()->get();
        }
        return view('article.article', [
            'articles' => $articles
        ]);
    }

    public function article_add()
    {
        return view('article.article_add');
    }
    public function article_upload()
    {
        $validatedData = request()->validate(
            [
                'title'     => 'required|unique:articles',
                'quote'     => 'required',
                'thumbnail' => 'required|image',
                'content'   => 'required',
            ],
            [
                'required'           => ':attribute harus diisi',
                'unique'             => ':attribute telah digunakan',
                'thumbnail.required' => ':attribute harus diupload',
                'image'              => ':attribute harus berupa gambar',
            ],
            [
                'title'     => 'judul artikel',
                'quote'     => 'kutipan artikel',
                'thumbnail' => 'file thumbnail',
                'content'   => 'konten artikel',
            ]
        );
        $pathFile = '/assets/img/article';

        $validatedData['thumbnail'] = str_replace('public', '', request()->file('thumbnail')->store('public' . $pathFile));
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['slug'] = Str::slug($validatedData['title']);

        $images_filename = [];
        $dom = new DOMDocument();
        $dom->loadHTML($validatedData['content'], LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $key => $img) {
            $data = $img->getAttribute('src');
            $image_name = $pathFile . '/' . time() . $key . '.png';
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $path = public_path() . $image_name;
            file_put_contents($path, $data);
            $img->setAttribute('src', $image_name);
            $img->setAttribute('class', 'rounded');
            $images_filename[] = $image_name;
        }

        $validatedData['content'] = $dom->saveHTML();
        $validatedData['content'] = str_replace('<html><body>', '', $validatedData['content']);
        $validatedData['content'] = str_replace('</body></html>', '', $validatedData['content']);
        $validatedData['content'] = trim(preg_replace('/\s\s+/', ' ', $validatedData['content']));
        $articleId = Article::create($validatedData)->id;
        foreach ($images_filename as $value) {
            ArticleImage::create(['article_id' => $articleId, 'image' => $value]);
        }

        return redirect()->to('/admin/artikel')->with('message', [
            'icon'  => 'success',
            'title' => 'Artikel Baru',
            'text'  => 'berhasil ditambahkan'
        ]);
    }

    public function article_edit($id)
    {
        $article = Article::find($id);
        if (auth()->user()->role != 'super admin' && $article->user_id != auth()->user()->id) {
            return abort(403);
        }
        return view('article.article_edit', [
            'article' => $article
        ]);
    }

    public function article_update($id)
    {
        $oldArticle = Article::find($id);
        if (auth()->user()->role != 'super admin' && $oldArticle->user_id != auth()->user()->id) {
            return abort(403);
        }
        $validatedData = request()->validate(
            [
                'title'     => 'required|unique:articles,title,' . $id,
                'quote'     => 'required',
                'thumbnail' => 'image',
                'content'   => 'required',
            ],
            [
                'required' => ':attribute harus diisi',
                'unique'   => ':attribute telah digunakan',
                'image'    => ':attribute harus berupa gambar',
            ],
            [
                'title'     => 'judul artikel',
                'quote'     => 'kutipan artikel',
                'thumbnail' => 'file thumbnail',
                'content'   => 'konten artikel',
            ]
        );

        $pathFile = '/assets/img/article';
        if (isset($validatedData['thumbnail'])) {
            $validatedData['thumbnail'] = str_replace('public', '', request()->file('thumbnail')->store('public' . $pathFile));
            Storage::delete('public' . $oldArticle->thumbnail);
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['slug'] = Str::slug($validatedData['title']);

        $images_filename = [];
        $dom = new DOMDocument();
        $dom->loadHTML($validatedData['content'], LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $key => $img) {
            $data = $img->getAttribute('src');
            $image_name = $pathFile . '/' . time() . $key . '.png';
            $images_filename[] = $image_name;
            if (!strstr($data, $pathFile)) {
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $path = public_path() . $image_name;
                file_put_contents($path, $data);
            } else {
                rename(public_path() . $data, public_path() . $image_name);
            }
            $img->setAttribute('src', $image_name);
            $img->setAttribute('class', 'rounded');
        }
        // $elements = ['p', 'span', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'blockquote'];
        // foreach ($elements as $element) {
        //     $elem = $dom->getElementsByTagName($element);
        //     foreach ($elem as $e) {
        //         $e->removeAttribute('style');
        //     }
        // }
        $validatedData['content'] = $dom->saveHTML();
        $validatedData['content'] = str_replace('<html><body>', '', $validatedData['content']);
        $validatedData['content'] = str_replace('</body></html>', '', $validatedData['content']);
        $validatedData['content'] = trim(preg_replace('/\s\s+/', ' ', $validatedData['content']));
        $oldArticle->update($validatedData);
        $oldArticleImage = $oldArticle->articleImage;
        foreach ($oldArticleImage as $image) {
            if (file_exists(public_path() . $image->image)) {
                unlink(public_path() . $image->image);
            }
            $image->delete();
        }
        foreach ($images_filename as $value) {
            ArticleImage::create(['article_id' => $oldArticle->id, 'image' => $value]);
        }

        return redirect()->to('/admin/artikel')->with('message', [
            'icon'  => 'success',
            'title' => 'Artikel',
            'text'  => 'berhasil diubah'
        ]);
    }

    public function article_delete($id)
    {
        $article = Article::find($id);
        if (auth()->user()->role != 'super admin' && $article->user_id != auth()->user()->id) {
            return abort(403);
        }
        Storage::delete('public' . $article->thumbnail);
        foreach ($article->articleImage as $image) {
            if (file_exists(public_path() . $image->image)) {
                unlink(public_path() . $image->image);
            }
            $image->delete();
        }
        $article->delete();
        return redirect()->to('/admin/artikel')->with('message', [
            'icon'  => 'success',
            'title' => 'Artikel',
            'text'  => 'berhasil dihapus'
        ]);
    }
}
