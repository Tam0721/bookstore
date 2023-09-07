@extends('layouts.layoutAdmin')

@section('title')
    Chi tiết đơn hàng
@endsection

@section('content')
    <div class="bg-white my-4">
        <p class="text-3xl text-center font-bold pt-4">Chi tiết đơn hàng</p>
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-8 lg:max-w-7xl lg:px-8">
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
                                            ID đơn hàng
                                        </th>
                                        
                                        <th
                                            scope="col"
                                            class="border-r px-6 py-4 dark:border-red-600">
                                            ID sản phẩm
                                        </th>
        
                                        <th
                                            scope="col"
                                            class="border-r px-6 py-4 dark:border-red-600">
                                            Hình ảnh sản phẩm
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
                                            Số lượng
                                        </th>

                                        <th scope="col" class="px-6 py-4">Thành tiền</th>
                                    </tr>
                                </thead>
        
                                <tbody>
                                    @php
                                        $total = 0;
                                    @endphp
                                    @foreach ($detailBill as $d)
                                        <tr class="border-b dark:border-neutral-500">
                                            <td
                                                class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                {{ $d->bill_id }}
                                            </td>
        
                                            <td
                                                class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                {{ $d->pro_id }}
                                            </td>

                                            @foreach ($d->getProduct as $p)
                                                <td
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                    <img class="max-w-xs max-h-xs w-20 mx-auto" src=" {{ asset('storage/uploads/'.$p->pro_img) }} ">
                                                </td>

                                                <td
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                    {{ $p->pro_name }}
                                                </td>

                                                <td
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                    {{ number_format($p->pro_price, 0, ',', '.') }}
                                                </td>

                                                <td
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                    {{ $d->detail_quantity }}
                                                </td>

                                                <td
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                    {{ number_format($p->pro_price * $d->detail_quantity, 0, ',', '.') }}
                                                </td>
                                                @php
                                                    $total += $p->pro_price * $d->detail_quantity;
                                                @endphp
                                            @endforeach
                                        </tr>
                                    @endforeach

                                    <tr class="border-b dark:border-neutral-500">
                                        <td
                                            colspan="6"
                                            class="whitespace-nowrap text-right font-medium border-r px-6 py-4 dark:border-neutral-500">
                                            Tổng tiền:
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4 font-medium"> {{ number_format($total, 0, ',', '.') }} </td>
                                    </tr>
        
                                    <tr class="border-b dark:border-neutral-500">
                                        <td
                                            colspan="9"
                                            class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                            {{ $detailBill->links() }}
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection