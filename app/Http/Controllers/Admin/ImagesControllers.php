<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Images;
use App\Models\Products;
use Illuminate\Pagination\Paginator;
Paginator::useTailwind();

class ImagesControllers extends Controller
{
    public function getAll($idProduct) {
        $images = Images::where('pro_id', $idProduct) -> paginate(3);
        if ($images->isEmpty()) {
            return redirect('/admin/add-image/'.$idProduct);
        } else {
            return view('admin.images.list-image', ['images' => $images]);
        }
    }

    public function add($idProduct) {
        // $cate = Categories::all();
        $product = Products::where('pro_id', $idProduct) -> get();
        if($product == null) return redirect('/admin/san-pham');
        return view('admin.images.add-form', ['product' => $product]);
    }

    public function addAction($idProduct, Request $request) {
        // $img = new Images;
        $uploadedFile = $request->file('pro_img');
        $fileName = '';
        $totalFiles = count($request->file('pro_img'));
        if ($uploadedFile == null) {
            $fileName = '';
        } else {
            for ($i = 0; $i < $totalFiles; $i++) { 
                $fileName = time().'-'.$uploadedFile[$i]->getClientOriginalName();
                Storage::disk('my-disk')->putFileAs(
                    'storage/uploads/',
                    $uploadedFile[$i],
                    $fileName
                );
                // $files[] = $name;
                $img = new Images;
                $img->pro_id = $_POST['pro_id'];
                $img->img_file = $fileName;
                $img->save();
            }  
        }
        // $img->pro_id = $_POST['pro_id'];
        // $img->img_file = implode(',', $files);
        // $img->save();
        return redirect('/admin/hinh-anh/'.$idProduct)->with('alert', 'Cập nhật hình ảnh sản phẩm thành công!');
    }
}
