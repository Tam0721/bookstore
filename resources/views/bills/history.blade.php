@extends('layouts.layout')

@section('title')
    Lịch sử mua hàng
@endsection

@section('content')
    @include('bills.shippingBills')
    <hr>
    @include('bills.shippedBills')
@endsection

