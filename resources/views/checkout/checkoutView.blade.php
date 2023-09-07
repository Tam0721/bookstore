@extends('layouts.layout')

@section('title')
    Thanh toán
@endsection

@section('content')
    <div class="bg-white my-4">
        <p class="text-3xl text-center font-bold pt-4">Thông tin giao hàng</p>
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-8 lg:max-w-7xl lg:px-8">
            @if (Route::has('login'))
                @auth
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <form action=" {{ url('/dat-hang') }} " method="post" class="">
                                        @csrf
                                        <label class="block d-none">
                                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                                ID 
                                            </span>
                                            <input value=" {{ Auth::user()->id}} " type="text" name="acc_id" class=""/>
                                        </label>
            
                                        <label class="block mb-3">
                                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                                Họ tên
                                            </span>
                                            <input value=" {{ Auth::user()->name}} " type="text" name="bill_name" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Tên danh mục" required/>
                                        </label>

                                        <label class="block mb-3">
                                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                                Số điện thoại
                                            </span>
                                            <input value=" {{ Auth::user()->phone}} " type="text" name="bill_phone" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Tên danh mục" required/>
                                        </label>

                                        <label class="block mb-3">
                                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                                Địa chỉ
                                            </span>
                                            <input value=" {{ Auth::user()->address}} " type="text" name="bill_address" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Tên danh mục" required/>
                                        </label>

                                        <label class="block mb-3">
                                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                                Email
                                            </span>
                                            <input value=" {{ Auth::user()->email}} " type="text" name="bill_email" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Tên danh mục" required/>
                                        </label>

                                        <label class="block mb-3">
                                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                                Phương thức thanh toán
                                            </span>
                                            <div class="flex">
                                                <!--First radio-->
                                                <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                                                    <input
                                                        class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                                        type="radio"
                                                        name="bill_payment"
                                                        id="cash"
                                                        value="0" checked/>
                                                    <label
                                                        class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                                                        for="cash"
                                                        >Tiền mặt</label
                                                    >
                                                </div>
                                              
                                                <!--Second radio-->
                                                {{-- <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                                                    <input
                                                        class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                                        type="radio"
                                                        name="bill_payment"
                                                        id="bank"
                                                        value="1" />
                                                    <label
                                                        class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                                                        for="bank"
                                                        >Chuyển khoản</label
                                                    >
                                                </div> --}}
                                            </div>
                                        </label>
                                        
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
                                                                class="whitespace-nowrap border-r font-medium px-6 py-4 dark:border-neutral-500">
                                                                {{ $cart['quantity'] }}
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

                                        <div class="text-right mt-3">
                                            <button type="submit" class="btn-outline">Xác nhận</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="mt-3 flex">
                        <div class="w-50 text-center">
                            <p>Đăng nhập để thanh toán.</p>
                            <div class="mt-3">
                                <a href=" {{ route('login') }} " class="btn-outline">Đăng nhập</a>
                            </div>
                        </div>
            
                        <div class="w-50 text-center">
                            <p>Chưa có tài khoản?</p>
                            <div class="mt-3">
                                <a href=" {{ route('register') }} " class="btn-outline">Đăng ký</a>
                            </div>
                        </div>
                    </div>
                @endauth
            @endif
        </div>
    </div>
@endsection