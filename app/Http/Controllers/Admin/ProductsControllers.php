<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Pagination\Paginator;
Paginator::useTailwind();

class ProductsControllers extends Controller
{
    public function getAll() {
        $products = Products::orderBy('products.updated_at', 'desc') -> paginate(3);
        return view('admin.products.list-product', ['products' => $products]);
    }

    public function add() {
        $cate = Categories::all();
        return view('admin.products.add-form', ['cate' => $cate]);
    }

    public function addAction(Request $request) {
        $product = new Products;
        $product->pro_name = $_POST['pro_name'];
        $product->pro_price = $_POST['pro_price'];
        $product->pro_spotlight = $_POST['pro_spotlight'];
        $product->pro_special = $_POST['pro_special'];
        $product->pro_description = $_POST['pro_description'];
        $uploadedFile = $request->file('pro_img');
        $fileName = '';
        if ($uploadedFile == null) {
            $fileName = '';
        } else {
            $fileName = time().'-'.$uploadedFile->getClientOriginalName();
            Storage::disk('my-disk')->putFileAs(
                'storage/uploads/',
                $uploadedFile,
                $fileName
            );
        }
        $product->pro_img = $fileName;
        $product->cate_id = $_POST['cate_id'];
        $product->save();
        return redirect('/admin/san-pham')->with('alert', 'Thêm sản phẩm thành công');
    }

    public function update($idProduct) {
        $cate = Categories::all();
        $product = Products::where('pro_id', $idProduct) -> get();
        if($product == null) return redirect('/admin/san-pham');
        return view('admin.products.update-form', ['cate' => $cate, 'product' => $product]);
    }

    public function updateAction($idProduct, Request $request) {
        $product = Products::find($idProduct);
        if ($product == null) return redirect('/admin/san-pham')->with('alert', 'Không tìm thấy sản phẩm!');
        $product->pro_name = $_POST['pro_name'];
        $product->pro_price = $_POST['pro_price'];
        $product->pro_spotlight = $_POST['pro_spotlight'];
        $product->pro_special = $_POST['pro_special'];
        $product->pro_description = $_POST['pro_description'];
        $uploadedFile = $request->file('pro_img');
        if ($uploadedFile == null) {
            $fileName = $product->pro_img;
        } else {
            $fileName = time().'-'.$uploadedFile->getClientOriginalName();
            Storage::disk('my-disk')->putFileAs(
                'storage/uploads/',
                $uploadedFile,
                $fileName
            );
        }
        $product->pro_img = $fileName;
        $product->cate_id = $_POST['cate_id'];
        $product->save();
        return redirect('/admin/san-pham')->with('alert', 'Cập nhật sản phẩm thành công');
    }

    public function delete($idProduct) {
        $product = Products::find($idProduct);
        if($product == null) return redirect('/admin/san-pham')->with('alert', 'Không tìm thấy sản phẩm!');
        $product->delete();
        return redirect('/admin/san-pham')->with('alert', 'Xoá sản phẩm thành công!');
    }
}
