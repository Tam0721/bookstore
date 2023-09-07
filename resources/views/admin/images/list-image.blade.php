@extends('layouts.layoutAdmin')

@section('title')
    Trang quản trị hình ảnh sản phẩm
@endsection

@section('content')
    <h2 class="text-center text-3xl font-bold pb-4">
        Trang quản trị hình ảnh sản phẩm
    </h2>

    <div class="mb-3">
        <a href=" {{ url('/admin/add-image/'.$images[0]->pro_id) }} " class="btn-outline">Thêm hình ảnh mới</a>
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
                                    Hình ảnh
                                </th>

                                <th
                                    scope="col"
                                    class="border-r px-6 py-4 dark:border-red-600">
                                    Sản phẩm
                                </th>

                                <th scope="col" class="px-6 py-4">Thao tác</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($images as $image)
                                <tr class="border-b dark:border-neutral-500">
                                    <td
                                        colspan="1"
                                        class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">
                                        {{ $image->img_id }}
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        <img class="max-w-xs max-h-xs w-20 mx-auto" src=" {{ asset('storage/uploads/'.$image->img_file) }} " alt=" {{ $image->getProduct->pro_name }} ">
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ $image->getProduct->pro_name }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <a class="btn-outline" href=" {{ url('/admin/delete-image/'.$image->img_id) }} ">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach

                            <tr class="border-b dark:border-neutral-500">
                                <td
                                colspan="4"
                                class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                {{ $images->links() }}
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