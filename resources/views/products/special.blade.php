<div class="bg-white my-4 text-center">
    <p class="text-3xl font-bold py-4">Sản phẩm đặc biệt</p>
    <div
        class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
        <a href=" {{ url('/san-pham/'.$pro_special->pro_id) }} ">
            <img
            class="mx-auto sm:max-w-xl"
            src=" {{ asset('/storage/uploads/'.$pro_special->pro_img) }} "
            alt="" />
        </a>
        <div class="p-3">
            <h5
            class="mb-2 text-xl font-bold leading-tight text-red-600">
                {{ $pro_special->pro_name }}
            </h5>
            <p class="text-base text-red-600">
                <b>Socrates in Love</b> - Một chuyện tình dang dở, đau thương và tuyệt vọng. 
                Người ở lại buộc phải mặc kệ quá khứ và bước tiếp về phía trước.
            </p>
        </div>
        <form class="mt-3" action=" {{ url('/add-to-cart/'.$pro_special->pro_id) }} " method="POST">
            @csrf
            <div class="col-auto text-center">
                <button type="submit" class="btn-outline mb-3">Thêm vào giỏ hàng</button>
            </div>
        </form>
    </div>
</div>