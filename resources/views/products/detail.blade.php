@extends('layouts.layout')

@section('title')
    {{ $proDetail->pro_name }}
@endsection

@section('content')
    <!-- component -->
<section class="bg-white my-4">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-8 lg:max-w-7xl lg:px-8">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <div class="lg:w-1/2 w-full ">
                <img alt=" {{ $proDetail->pro_name }} " id="demo" class="object-cover object-center rounded border border-gray-200" src=" {{ asset('/storage/uploads/'.$proDetail->pro_img) }} ">
                
                <div class="flex mx-auto mt-2">
                    <img alt=" {{ $proDetail->pro_name }} " class="w-20 mr-1 rounded border border-gray-200" src=" {{ asset('/storage/uploads/'.$proDetail->pro_img) }} " onclick="myFunction(this)">
                    @foreach ($proDetail->images as $image)
                        <img alt=" {{ $proDetail->pro_name }} " class="w-20 mr-1 rounded border border-gray-200" src=" {{ asset('/storage/uploads/'.$image->img_file) }} " onclick="myFunction(this)">
                    @endforeach
                </div>
            </div>
            
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h2 class="text-sm title-font text-gray-500 tracking-widest"> {{ $proDetail->getCateName->cate_name }} </h2>
                <h1 class="text-gray-900 text-3xl title-font font-medium my-3"> {{ $proDetail->pro_name }} </h1>
                <span class="text-sm title-font text-gray-500 tracking-widest">Mã sản phẩm: {{ $proDetail->pro_id }} </span>
                <div class="mt-5 items-center pb-5 border-b-2 border-gray-200">
                    <div class="">
                        <span class="title-font font-medium text-2xl text-gray-900"> {{number_format($proDetail->pro_price, 0, ',', '.')}} VND </span>
                    </div>
                </div>

                <form class="flex flex-row mt-3" action=" {{ url('/add-to-cart/'.$proDetail->pro_id) }} " method="POST">
                    @csrf
                    <div class="">
                        <label for="quantity" class="visually-hidden"></label>
                        <input type="number" class="rounded mr-2" id="quantity" name="quantity" value="1" min="1" max="1000">
                    </div>

                    <div class="">
                        <button type="submit" class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">Thêm vào giỏ hàng</button>
                    </div>
                </form>
            </div>
        </div>

        <hr class="my-5">

        <div class="" id="description">
            <p class="text-4xl mb-3 font-bold">Mô tả</p>
            {!! $proDetail->pro_description !!}
        </div>

        <hr class="my-5">

        <div class="">
            <p class="text-3xl text-center font-bold">Sản phẩm tương tự</p>
            <div class="mx-auto max-w-2xl px-4 py-4 sm:px-4 sm:py-4 lg:max-w-7xl lg:px-8">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                    @foreach ($proSimilar as $product)
                        <a href=" {{ url('/san-pham/'.$product->pro_id) }} " class="group">
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                <img src=" {{ asset('/storage/uploads/'.$product->pro_img) }} " alt=" {{ $product->pro_name }} " class="w-full object-cover object-center group-hover:opacity-75">
                            </div>
                            <h3 class="mt-4 text-center text-lg font-bold"> {{ $product->pro_name }} </h3>
                            <p class="mt-1 text-lg text-center"> {{ number_format($product->pro_price, 0, ',', '.') }} </p>
                            <form class="mt-4" action=" {{ url('/add-to-cart/'.$product->pro_id) }} ">
                                <div class="col-auto text-center">
                                    <button type="submit" class="btn-outline">Thêm vào giỏ hàng</button>
                                </div>
                            </form>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <hr class="my-5">

        <div>
            <p class="text-4xl mb-3 font-bold">Bình luận</p>
            @if (Route::has('login'))
                @auth
                    <p class='font-bold text-xl '> {{ Auth::user()->name }} </p>
                    <form method="POST" action=" {{ url('/add-comment') }} ">
                        @csrf
                        <input type="text" name="pro_id" value=" {{ $proDetail->pro_id }} " style="display:none">
                        <input type="text" name="user_id" value=" {{ Auth::user()->id }} " style="display:none">
                        <textarea name="comment" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Bình luận" required></textarea>
                        <div class="text-right mt-3">
                            <button type="submit" class="btn-outline">Bình luận</button>
                        </div>
                    </form>
            @else
                <a class="text-lg text-red-600" href=" {{route('login')}} ">Đăng nhập để bình luận.</a>
                @endauth
            @endif
        </div>

        <div>
            @foreach ($proDetail->comments as $comment)
                <div class="mb-12 flex flex-wrap md:mb-4">
                    <div class="w-full md:w-10/12 shrink-0 grow-0 basis-auto md:pl-6">
                        <p class="mb-1 font-semibold"> {{ $comment->getUser->name }} </p>
                        <p> {{ $comment->content }} </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

<script>
    function myFunction(imgs) {
        var expandImg = document.getElementById("demo");
        expandImg.src = imgs.src;
    };
</script>