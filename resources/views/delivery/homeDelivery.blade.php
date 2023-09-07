@extends('layouts.layoutDelivery')

@section('title')
    Trang quản lý đơn hàng 
@endsection

@section('content')
    <!-- Container for demo purpose -->
    <div class="container mx-auto md:px-6">
        <!-- Section: Design Block -->
        <section class=" text-center">
            <h2 class="mb-12 pb-4 text-center text-3xl font-bold">
                Trang quản lý đơn hàng
            </h2>

            @include('delivery.bills.list-bill')

        </section>
        <!-- Section: Design Block -->
    </div>
  <!-- Container for demo purpose -->
@endsection