<div class="bg-white my-4">
    <p class="text-3xl text-center font-bold pt-4">Đơn hàng đã giao</p>
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
                                        ID
                                    </th>
    
                                    <th
                                        scope="col"
                                        class="border-r px-6 py-4 dark:border-red-600">
                                        Tên người nhận
                                    </th>
    
                                    <th
                                        scope="col"
                                        class="border-r px-6 py-4 dark:border-red-600">
                                        Số điện thoại
                                    </th>
    
                                    <th
                                        scope="col"
                                        class="border-r px-6 py-4 dark:border-red-600">
                                        Địa chỉ
                                    </th>
    
                                    <th
                                        scope="col"
                                        class="border-r px-6 py-4 dark:border-red-600">
                                        Email
                                    </th>
    
                                    <th
                                        scope="col"
                                        class="border-r px-6 py-4 dark:border-red-600">
                                        Phương thức thanh toán
                                    </th>
    
                                    <th
                                        scope="col"
                                        class="border-r px-6 py-4 dark:border-red-600">
                                        Trạng thái thanh toán
                                    </th>

                                    <th
                                        scope="col"
                                        class="border-r px-6 py-4 dark:border-red-600">
                                        Ngày giao hàng
                                    </th>
    
                                    <th scope="col" class="px-6 py-4">Thao tác</th>
                                </tr>
                            </thead>
    
                            <tbody>
                                @foreach ($shippedBills as $b)
                                    <tr class="border-b dark:border-neutral-500">
                                        <td
                                            colspan="1"
                                            class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">
                                            {{ $b->bill_id }}
                                        </td>
    
                                        <td
                                            class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                            {{ $b->bill_name }}
                                        </td>
    
                                        <td
                                            class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                            {{ $b->bill_phone }}
                                        </td>
    
                                        <td
                                            class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                            {{ $b->bill_address }}
                                        </td>

                                        <td
                                            class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                            {{ $b->bill_email }}
                                        </td>

                                        <td
                                            class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                            {{ $b->bill_payment ? 'Chuyển khoản':'Tiền mặt' }}
                                        </td>
    
                                        <td
                                            class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                            {{ $b->bill_paystatus ? 'Đã thanh toán':'Chưa thanh toán' }}
                                        </td>
    
                                        <td
                                            class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                            {{ $b->updated_at->format('d/m/Y') }}
                                        </td>
    
                                        <td class="whitespace-nowrap px-6 py-4">
                                            <a href=" {{ url('/getBillDetails/'.$b->bill_id) }} " class="openModal btn-outline">Xem</a>
                                        </td>
                                    </tr>
                                @endforeach
    
                                <tr class="border-b dark:border-neutral-500">
                                    <td
                                    colspan="9"
                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                    {{ $shippedBills->links() }}
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
