<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-red-600 border-red-600 hover:text-white hover:bg-red-600 inline-flex items-center px-4 py-2 border-2 rounded-md font-semibold text-xs uppercase tracking-widest active:bg-gray-900 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
