@extends('layouts.layoutAdmin')

@section('title')
    Thêm danh mục mới
@endsection

@section('content')
    <h2 class="text-center text-3xl font-bold pb-4">
        Thêm danh mục mới
    </h2>

    <div
    class="block mx-auto max-w-2xl rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
        <form action=" {{ url('/admin/add-category') }} " method="post" class="">
            <label class="block">
                <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                    Tên danh mục
                </span>
                <input type="text" name="cate_name" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Tên danh mục" required/>
            </label>

            <div class="text-right mt-3">
                <button type="submit" class="btn-outline">Thêm</button>
            </div>
            @csrf
        </form>
    </div>
@endsection