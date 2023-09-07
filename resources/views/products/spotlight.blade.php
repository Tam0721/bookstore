<div class="bg-white my-4">
    <p class="text-3xl text-center font-bold pt-4">Sản phẩm nổi bật</p>
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-8 lg:max-w-7xl lg:px-8">
        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
            @foreach ($pro_spotlight as $product)
                <a href=" {{ url('/san-pham/'.$product->pro_id) }} " class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src=" {{ asset('/storage/uploads/'.$product->pro_img) }} " alt=" {{ $product->pro_name }} " class="w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-center text-lg font-bold"> {{ $product->pro_name }} </h3>
                    <p class="mt-1 text-lg text-center"> {{ number_format($product->pro_price, 0, ',', '.') }} </p>
                    <form class="mt-4" action=" {{ url('/add-to-cart/'.$product->pro_id) }} " method="POST">
                        @csrf
                        <div class="col-auto text-center">
                            <button class="btn-outline mb-3">Thêm vào giỏ hàng</button>
                        </div>
                    </form>
                </a>
            @endforeach
        </div>
    </div>
</div>