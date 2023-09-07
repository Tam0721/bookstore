@extends('layouts.layoutAdmin')

@section('title')
    Trang quản trị sản phẩm
@endsection

@section('content')
    <h2 class="text-center text-3xl font-bold pb-4">
        Trang quản trị sản phẩm
    </h2>

    <div class="mb-3">
        <a href=" {{ url('/admin/add-product') }} " class="btn-outline">Thêm sản phẩm mới</a>
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
                                    Tên sản phẩm
                                </th>

                                <th
                                    scope="col"
                                    class="border-r px-6 py-4 dark:border-red-600">
                                    Giá sản phẩm
                                </th>

                                <th
                                    scope="col"
                                    class="border-r px-6 py-4 dark:border-red-600">
                                    Lượt xem
                                </th>

                                <th
                                    scope="col"
                                    class="border-r px-6 py-4 dark:border-red-600">
                                    Sản phẩm nổi bật
                                </th>

                                <th
                                    scope="col"
                                    class="border-r px-6 py-4 dark:border-red-600">
                                    Sản phẩm đặc biệt
                                </th>

                                <th
                                    scope="col"
                                    class="border-r px-6 py-4 dark:border-red-600">
                                    Danh mục
                                </th>

                                <th scope="col" class="px-6 py-4">Thao tác</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($products as $p)
                                <tr class="border-b dark:border-neutral-500">
                                    <td
                                        colspan="1"
                                        class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">
                                        {{ $p->pro_id }}
                                    </td>

                                    <td
                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        <img class="w-auto h-auto" src=" {{ asset('storage/uploads/'.$p->pro_img) }} " alt=" {{ $p->pro_name }} ">
                                    </td>

                                    <td
                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ $p->pro_name }}
                                    </td>

                                    <td
                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ number_format($p->pro_price, 0, ',', '.') }} VNĐ
                                    </td>

                                    <td
                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ $p->pro_view }}
                                    </td>

                                    <td
                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ $p->pro_spotlight ? 'Nổi bật':'Không nổi bật' }}
                                    </td>

                                    <td
                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ $p->pro_special ? 'Đặc biệt':'Không đặc biệt' }}
                                    </td>
                                    
                                    <td
                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ $p->getCateName->cate_name }}
                                    </td>

                                    <td class="whitespace-nowrap px-6 py-4">
                                        <a class="btn-outline" href=" {{ url('/admin/hinh-anh/'.$p->pro_id) }} ">Hình ảnh</a>
                                        <a class="btn-outline" href=" {{ url('/admin/update-product/'.$p->pro_id) }} ">Cập nhật</a>
                                        <a class="btn-outline" href=" {{ url('/admin/delete-product/'.$p->pro_id) }} ">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach

                            <tr class="border-b dark:border-neutral-500">
                                <td
                                colspan="9"
                                class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                {{ $products->links() }}
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