@extends('layouts.layoutAdmin')

@section('title')
    Cập nhật hình ảnh sản phẩm
@endsection

@section('content')
    <h2 class="text-center text-3xl font-bold pb-4">
        Cập nhật hình ảnh sản phẩm
    </h2>

    <div
    class="block mx-auto max-w-2xl rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
        <form action=" {{ url('/admin/add-image/'.$product[0]->pro_id) }} " method="post" class="" enctype="multipart/form-data">
            <label class="block mb-3">
                <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                    Tên sản phẩm
                </span>
                <input type="text" value=" {{ $product[0]->pro_name }} " name="pro_name" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Tên sản phẩm" readonly/>
                <input type="text" value=" {{ $product[0]->pro_id }} " name="pro_id" style="display: none">
            </label>

            <label class="mb-3">
                <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                    Hình ảnh sản phẩm
                </span>
                <input
                    class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                    type="file"
                    id="pro_img"
                    name="pro_img[]" multiple/>
            </label>

            <div class="text-right mt-3">
                <button type="submit" class="btn-outline">Thêm</button>
            </div>
            {{@csrf_field()}}
        </form>
    </div>
@endsection