<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Pagination\Paginator;
Paginator::useTailwind();

class CategoriesControllers extends Controller
{
    public function getAll() {
        $cates = Categories::orderBy('updated_at', 'desc')->paginate(3);
        return view('admin.categories.list-cate', ['cates' => $cates]);
    }

    public function add() {
        return view('admin.categories.add-form');
    }

    public function addAction() {
        $cate = new Categories;
        $cate->cate_name = $_POST['cate_name'];
        $cate->save();
        return redirect('/admin/danh-muc')->with('alert', 'Thêm danh mục thành công');
    }

    public function update($idCate) {
        $cate = Categories::where('cate_id', $idCate) -> get();
        if($cate == null) return redirect('/admin/danh-muc');
        return view('admin.categories.update-form', ['cate' => $cate]);
    }

    public function updateAction($idCate) {
        $cate = Categories::find($idCate);
        if ($cate == null) return redirect('/admin/danh-muc')->with('alert', 'Không tìm thấy danh mục!');
        $cate->cate_name = $_POST['cate_name'];
        $cate->save();
        return redirect('/admin/danh-muc')->with('alert', 'Cập nhật danh mục thành công');
    }

    public function delete($idCate) {
        $cate = Categories::find($idCate);
        if($cate == null) return redirect('/admin/danh-muc')->with('alert', 'Không tìm thấy danh mục!');
        $cate->delete();
        return redirect('/admin/danh-muc')->with('alert', 'Xoá danh mục thành công!');
    }
}
