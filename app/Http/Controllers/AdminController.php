<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Mission;
use App\Models\Portfolio;
use App\Models\Product;
use App\Models\Service;
use App\Models\SliderImage;
use App\Models\Vision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function swap($table, $id1, $id2)
    {
        if ($table == 'client') {
            Client::where('id', $id2)->update([
                'id' => 0
            ]);
            Client::where('id', $id1)->update([
                'id' => $id2
            ]);
            Client::where('id', 0)->update([
                'id' => $id1
            ]);
        } else if ($table == "produk") {
            Product::where('id', $id2)->update([
                'id' => 0
            ]);
            Product::where('id', $id1)->update([
                'id' => $id2
            ]);
            Product::where('id', 0)->update([
                'id' => $id1
            ]);
        } else if ($table == 'portfolio') {
            Portfolio::where('id', $id2)->update([
                'id' => 0
            ]);
            Portfolio::where('id', $id1)->update([
                'id' => $id2
            ]);
            Portfolio::where('id', 0)->update([
                'id' => $id1
            ]);
        } else if ($table == 'slider') {
            SliderImage::where('id', $id2)->update([
                'id' => 0
            ]);
            SliderImage::where('id', $id1)->update([
                'id' => $id2
            ]);
            SliderImage::where('id', 0)->update([
                'id' => $id1
            ]);
        } else if ($table == 'layanan') {
            Service::where('id', $id2)->update([
                'id' => 0
            ]);
            Service::where('id', $id1)->update([
                'id' => $id2
            ]);
            Service::where('id', 0)->update([
                'id' => $id1
            ]);
        } else if ($table == 'visi') {
            Vision::where('id', $id2)->update([
                'id' => 0
            ]);
            Vision::where('id', $id1)->update([
                'id' => $id2
            ]);
            Vision::where('id', 0)->update([
                'id' => $id1
            ]);
        } else if ($table == 'misi') {
            Mission::where('id', $id2)->update([
                'id' => 0
            ]);
            Mission::where('id', $id1)->update([
                'id' => $id2
            ]);
            Mission::where('id', 0)->update([
                'id' => $id1
            ]);
        }

        if ($table == 'visi' || $table == 'misi') {
            return redirect()->to("/admin/tentang-perusahaan")->with('message', [
                'icon'  => 'success',
                'title' => 'Data',
                'text'  => 'berhasil ditukar'
            ]);
        }
        return redirect()->to("/admin/$table")->with('message', [
            'icon'  => 'success',
            'title' => 'Data',
            'text'  => 'berhasil ditukar'
        ]);
    }
}
