@extends('layouts.layoutAdmin')

@section('title')
    Trang quản trị danh mục
@endsection

@section('content')
    <h2 class="text-center text-3xl font-bold pb-4">
        Trang quản trị danh mục
    </h2>

    <div class="mb-3">
        <a href=" {{ url('/admin/add-category') }} " class="btn-outline">Thêm danh mục mới</a>
    </div>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table
                        class="min-w-full border text-center text-sm font-light dark:border-red-600">
                        <thead class="border-b font-medium dark:border-neutral-500 bg-red-600 text-white">
                            <tr>
                                <th
                                    scope="col"
                                    class="border-r px-6 py-4 dark:border-red-600">
                                    ID
                                </th>

                                <th
                                    scope="col"
                                    class="border-r px-6 py-4 dark:border-red-600">
                                    Tên danh mục
                                </th>

                                <th
                                    scope="col"
                                    class="border-r px-6 py-4 dark:border-red-600">
                                    Số sản phẩm có trong danh mục
                                </th>

                                <th scope="col" class="px-6 py-4">Thao tác</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($cates as $c)
                                <tr class="border-b dark:border-neutral-500">
                                    <td
                                        colspan="1"
                                        class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">
                                        {{ $c->cate_id }}
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ $c->cate_name }}
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ $c->products()->count() }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <a class="btn-outline" href=" {{ url('/admin/update-category/'.$c->cate_id) }} ">Cập nhật</a>
                                        <a class="btn-outline" href=" {{ url('/admin/delete-category/'.$c->cate_id) }} ">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach

                            <tr class="border-b dark:border-neutral-500">
                                <td
                                colspan="4"
                                class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                {{ $cates->links() }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
</script>