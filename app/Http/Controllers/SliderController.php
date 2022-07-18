<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Slider;
use App\Models\SliderImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function slider()
    {
        return view('slider.slider', [
            'slider'      => Slider::first(),
            'sliderImage' => SliderImage::all()
        ]);
    }

    public function slider_add()
    {
        return view('slider.slider_add');
    }

    public function slider_upload($id)
    {
        $validatedData = request()->validate(
            [
                'title'       => 'required',
                'description' => 'required',
            ],
            [
                'required' => ':attribute harus diisi',
            ],
            [
                'title'       => 'judul',
                'description' => 'deskripsi',
            ]
        );

        $slider = Slider::find($id);
        $slider->update($validatedData);

        return redirect()->to('/admin/slider')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Slider',
            'text'  => 'berhasil diubah'
        ]);
    }

    public function slider_upload2()
    {
        $validatedData = request()->validate(
            [
                'filename'   => 'required|image',
                'filename.*' => 'required|image'
            ],
            [
                'required' => ':attribute harus diupload',
                'image'    => ':attribute harus berupa gambar',
            ],
            [
                'filename' => 'file',
            ]
        );
        if (request()->hasFile('filename')) {
            foreach ($validatedData['filename'] as $value) {
                SliderImage::create([
                    'filename' => str_replace('public', '', $value->store('public/assets/img/sliders'))
                ]);
            }
        }
        return redirect()->to('/admin/slider')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Slider',
            'text'  => 'berhasil ditambahkan'
        ]);
    }

    public function slider_edit($id)
    {

        return view('slider.slider_edit', [
            'slider' => SliderImage::find($id)
        ]);
    }

    public function slider_update($id)
    {
        $validatedData = request()->validate(
            [
                'filename'   => 'required|image',
                'filename.*' => 'required|image'
            ],
            [
                'required' => ':attribute harus diupload',
                'image'    => ':attribute harus berupa gambar',
            ],
            [
                'filename' => 'file',
            ]
        );
        $oldSlider = SliderImage::find($id);
        if (isset($validatedData['filename'])) {
            $validatedData['filename'] = str_replace('public', '', request()->file('filename')->store('public/assets/img/sliders'));
            Storage::delete('public' . $oldSlider->filename);
        }
        $oldSlider->update($validatedData);
        return redirect()->to('/admin/slider')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Slider',
            'text'  => 'berhasil diubah'
        ]);
    }

    public function slider_delete($id)
    {
        $slider = SliderImage::find($id);
        Storage::delete('public' . $slider->filename);
        $slider->delete();
        return redirect()->to('/admin/slider')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Slider',
            'text'  => 'berhasil dihapus'
        ]);
    }
}
