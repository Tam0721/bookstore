@extends('layouts.layout')

@section('title')
    Trang chủ
@endsection

@section('content')
    
    <img src="{{asset('storage/uploads/banner.jpg')}}" class="h-auto max-w-full rounded" alt="...">
    
    @include('products.spotlight')
    <hr>
    @include('products.special')
@endsection

{{-- <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
</script> --}}
