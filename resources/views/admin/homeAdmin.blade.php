@extends('layouts.layoutAdmin')

@section('title')
    Trang quản trị
@endsection

@section('content')
    <!-- Container for demo purpose -->
    <div class="container mx-auto md:px-6">
        <!-- Section: Design Block -->
        <section class=" text-center">
            <h2 class="mb-12 pb-4 text-center text-3xl font-bold">
                Trang quản trị
            </h2>
        
            <div class="grid gap-6 lg:grid-cols-3 xl:gap-x-12">
                <div class="mb-6 lg:mb-0">
                    <div
                        class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <div class="p-6">
                            <h5 class="mb-3 text-lg font-bold">Quản lý danh mục</h5>
                            <p class="mb-4 pb-2">
                                Quản lý các danh mục.
                            </p>
                            <a href=" {{ url('/admin/danh-muc') }} " data-te-ripple-init data-te-ripple-color="light"
                                class="inline-block rounded-full bg-red-600 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#e55353] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(229, 83, 83),0_4px_18px_0_rgba(229, 83, 83)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(229, 83, 83),0_4px_18px_0_rgba(229, 83, 83)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(229, 83, 83),0_4px_18px_0_rgba(229, 83, 83)] dark:shadow-[0_4px_9px_-4px_rgba(229, 83, 83)] dark:hover:shadow-[0_8px_9px_-4px_rgba(229, 83, 83),0_4px_18px_0_rgba(229, 83, 83)] dark:focus:shadow-[0_8px_9px_-4px_rgba(229, 83, 83),0_4px_18px_0_rgba(229, 83, 83)] dark:active:shadow-[0_8px_9px_-4px_rgba(229, 83, 83),0_4px_18px_0_rgba(229, 83, 83)]">
                                Truy cập
                            </a>
                        </div>
                    </div>
                </div>
        
                <div class="mb-6 lg:mb-0">
                    <div
                        class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <div class="p-6">
                            <h5 class="mb-3 text-lg font-bold">Quản lý sản phẩm</h5>
                            <p class="mb-4 pb-2">
                                Quản lý các sản phẩm.
                            </p>
                            <a href=" {{ url('/admin/san-pham') }} " data-te-ripple-init data-te-ripple-color="light"
                                class="inline-block rounded-full bg-red-600 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#e55353] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(229, 83, 83),0_4px_18px_0_rgba(229, 83, 83)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(229, 83, 83),0_4px_18px_0_rgba(229, 83, 83)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(229, 83, 83),0_4px_18px_0_rgba(229, 83, 83)] dark:shadow-[0_4px_9px_-4px_rgba(229, 83, 83)] dark:hover:shadow-[0_8px_9px_-4px_rgba(229, 83, 83),0_4px_18px_0_rgba(229, 83, 83)] dark:focus:shadow-[0_8px_9px_-4px_rgba(229, 83, 83),0_4px_18px_0_rgba(229, 83, 83)] dark:active:shadow-[0_8px_9px_-4px_rgba(229, 83, 83),0_4px_18px_0_rgba(229, 83, 83)]">
                                Truy cập
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mb-6 lg:mb-0">
                    <div
                        class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <div class="p-6">
                            <h5 class="mb-3 text-lg font-bold">Quản lý đơn hàng</h5>
                            <p class="mb-4 pb-2">
                                Quản lý các đơn hàng.
                            </p>
                            <a href=" {{ url('/admin/don-hang') }} " data-te-ripple-init data-te-ripple-color="light"
                                class="inline-block rounded-full bg-red-600 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#e55353] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(229, 83, 83),0_4px_18px_0_rgba(229, 83, 83)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(229, 83, 83),0_4px_18px_0_rgba(229, 83, 83)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(229, 83, 83),0_4px_18px_0_rgba(229, 83, 83)] dark:shadow-[0_4px_9px_-4px_rgba(229, 83, 83)] dark:hover:shadow-[0_8px_9px_-4px_rgba(229, 83, 83),0_4px_18px_0_rgba(229, 83, 83)] dark:focus:shadow-[0_8px_9px_-4px_rgba(229, 83, 83),0_4px_18px_0_rgba(229, 83, 83)] dark:active:shadow-[0_8px_9px_-4px_rgba(229, 83, 83),0_4px_18px_0_rgba(229, 83, 83)]">
                                Truy cập
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Design Block -->
    </div>
  <!-- Container for demo purpose -->
@endsection