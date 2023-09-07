@extends('layouts.layout')

@section('title')
    Giỏ hàng
@endsection

@section('content')
    <div class="bg-white my-4">
        <p class="text-3xl text-center font-bold pt-4">Giỏ hàng</p>
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-8 lg:max-w-7xl lg:px-8">
            @if (session('cart'))
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table
                                    class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                                    <thead class="border-b font-medium bg-red-600 text-white dark:border-neutral-500">
                                        <tr>
                                            <th
                                                scope="col"
                                                colspan="3"
                                                class="border-r px-6 py-4 dark:border-neutral-500">
                                                Sản phẩm
                                            </th>

                                            <th
                                                scope="col"
                                                class="border-r px-6 py-4 dark:border-neutral-500">
                                                Giá
                                            </th>

                                            <th
                                                scope="col"
                                                class="border-r px-6 py-4 dark:border-neutral-500">
                                                Số lượng
                                            </th>
                                            <th scope="col" class="px-6 py-4">Tổng</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            $total = 0;
                                        @endphp
                                        {{-- @if (session('cart')) --}}
                                            @foreach (session('cart') as $id => $cart)
                                                <tr class="border-b dark:border-neutral-500" data-id=" {{ $id }} ">
                                                    <td
                                                        class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">
                                                        {{ $cart['pro_id'] }}
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">
                                                        <img class="max-w-xs max-h-xs w-20 mx-auto" src=" {{ asset('storage/uploads/'.$cart['pro_img']) }} ">
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">
                                                        {{ $cart['pro_name'] }}
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">
                                                        {{ number_format($cart['pro_price'], 0, ',', '.') }}
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                        <div class="d-inline-flex items-center">
                                                            <button id="update-cart">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 w-6 h-6 bg-green-500 text-white">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                                                </svg>                                                          
                                                            </button>

                                                            <input type="number" name="quantity" id="quantity" value="{{ $cart['quantity'] }}" class="p-1 rounded text-center">

                                                            <button id="remove-from-cart">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-2 w-6 h-6 bg-red-500 text-white">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                                </svg>  
                                                            </button>                                                                                                          
                                                        </div>
                                                        
                                                    </td>
                                                    <td class="whitespace-nowrap font-medium px-6 py-4">
                                                        {{ number_format($cart['pro_price'] * $cart['quantity'], 0, ',', '.') }}
                                                    </td>
                                                </tr>
                                                @php
                                                    $total += $cart['pro_price'] * $cart['quantity'];
                                                @endphp
                                            @endforeach
                                            <tr class="border-b dark:border-neutral-500">
                                                <td
                                                    colspan="5"
                                                    class="whitespace-nowrap text-right font-medium border-r px-6 py-4 dark:border-neutral-500">
                                                    Tổng tiền:
                                                </td>
                                                <td class="whitespace-nowrap px-6 py-4 font-medium"> {{ number_format($total, 0, ',', '.') }} </td>
                                            </tr>
                                        {{-- @endif --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3 flex">
                    <div class="w-50 text-left">
                        <a href="{{ url('/san-pham') }}  " class="btn-outline">Tiếp tục mua hàng</a>
                    </div>
        
                    <div class="w-50 text-right">
                        <a href=" {{ url('/dat-hang') }} " class="btn-outline">Đặt hàng</a>
                    </div>
                </div>
            @else 
                <p>Chưa có sản phẩm trong giỏ hàng.</p>
                <div class="w-50 text-left mt-3">
                    <a href=" {{ url('/san-pham') }} " class="btn-outline">Mua hàng</a>
                </div>
            @endif
        </div>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        document.querySelectorAll('#update-cart').forEach(element => {
            element.addEventListener('click', function(e) {
                e.preventDefault();
    
                var ele = $(this);
        
                $.ajax({
                    url: '{{ route('update.cart') }}',
                    method: "PATCH",
                    data: {
                        _token: '{{ csrf_token() }}',
                        pro_id: ele.parents("tr").attr("data-id"), 
                        quantity: ele.parents("tr").find("#quantity").val()
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            });
        });
    });
  
    $(document).ready(function(){
        document.querySelectorAll('#remove-from-cart').forEach(element => {
            element.addEventListener('click', function(e) {
                e.preventDefault();
    
                var ele = $(this);
        
                if(confirm("Bạn có chắc muốn xóa sản phẩm không?")) {
                    $.ajax({
                        url: '{{ route('remove.from.cart') }}',
                        method: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}', 
                            pro_id: ele.parents("tr").attr("data-id")
                        },
                        success: function (response) {
                            window.location.reload();
                        }
                    });
                }
            });
        });
        // $("#remove-from-cart").click(function (e) {
        //     e.preventDefault();
    
        //     var ele = $(this);
    
        //     if(confirm("Bạn có chắc muốn xóa sản phẩm không?")) {
        //         $.ajax({
        //             url: '{{ route('remove.from.cart') }}',
        //             method: "DELETE",
        //             data: {
        //                 _token: '{{ csrf_token() }}', 
        //                 pro_id: ele.parents("tr").attr("data-id")
        //             },
        //             success: function (response) {
        //                 window.location.reload();
        //             }
        //         });
        //     }
        // });
    });
</script>