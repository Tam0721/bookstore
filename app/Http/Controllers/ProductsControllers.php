<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
Paginator::useTailwind();
use App\Models\Products;
use App\Models\Comments;
use App\Models\Images;

class ProductsControllers extends Controller
{
    public function allProducts() {
        $products = Products::paginate(4);
        return view('products.all', ['products' => $products]);
    }

    public function detailProduct($pro_id = 0) {
        $proDetail = Products::where('products.pro_id', $pro_id) -> first();
        $proSimilar = Products::where('products.cate_id', $proDetail->cate_id)
                            -> where('products.pro_id', '!=', $pro_id)
                            -> limit(4)
                            -> get();
        $proDetail->pro_view += 1;
        $proDetail->save();
        return view('products.detail', ['proDetail' => $proDetail, 'proSimilar' => $proSimilar]);
    }

    public function proByCate($cate_id = 0) {
        $proByCate = Products::where('products.cate_id', $cate_id) -> paginate(4)
                            -> withQueryString();
        return view('products.byCate', ['proByCate' => $proByCate]);
    }

    public function searchProduct(Request $request) {
        $keyword = ($request -> has('keyword')) ? ($request->query('keyword')) : "";
        $keyword = trim(strip_tags($keyword));
        $searchResult = [];
        if ($keyword != "") {
            $searchResult = Products::where('products.pro_name', 'like', '%'.$keyword.'%')->paginate(1)->withQueryString();
        }
        return view('products.searchResult', ['keyword' => $keyword, 'searchResult' => $searchResult]);
    }
}
