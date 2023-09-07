@extends('layouts.layout')

@section('title')
    Đăng ký
@endsection

@section('content')
    <p class="text-3xl text-center font-bold mb-3">Đăng ký</p>

    <x-guest-layout>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Username -->
            <div>
                <x-input-label for="username" :value="__('Tên đăng nhập')" class="after:content-['*'] after:ml-0.5 after:text-red-500 block" />

                <x-text-input id="username" class="block mt-1 w-full" 
                                type="text"
                                name="username"
                                :value="old('username')"
                                autofocus autocomplete="username"
                                placeholder="Nhập tên đăng nhập" />

                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>

            <!-- Name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Họ tên')" class="after:content-['*'] after:ml-0.5 after:text-red-500 block" />

                <x-text-input id="name" class="block mt-1 w-full" 
                                type="text" 
                                name="name" 
                                :value="old('name')" 
                                autocomplete="name" 
                                placeholder="Nhập họ tên" />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Phone number -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Số điện thoại')" />

                <x-text-input id="name" class="block mt-1 w-full" 
                                type="text" 
                                name="phone" 
                                :value="old('phone')" 
                                autocomplete="phone" 
                                placeholder="Nhập số điện thoại" />

                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            <!-- Address -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Địa chỉ')" />

                <x-text-input id="name" class="block mt-1 w-full" 
                                type="text" 
                                name="address" 
                                :value="old('address')" 
                                autocomplete="address" 
                                placeholder="Nhập địa chỉ" />

                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" class="after:content-['*'] after:ml-0.5 after:text-red-500 block" />

                <x-text-input id="email" class="block mt-1 w-full" 
                                type="email" 
                                name="email" 
                                :value="old('email')" 
                                autocomplete="username"
                                placeholder="Nhập email" />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Mật khẩu')" class="after:content-['*'] after:ml-0.5 after:text-red-500 block" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                autocomplete="new-password"
                                placeholder="Nhập mật khẩu" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Xác nhận mật khẩu')" class="after:content-['*'] after:ml-0.5 after:text-red-500 block" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" 
                                autocomplete="new-password"
                                placeholder="Xác nhận mật khẩu" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Đã đăng ký?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Đăng ký') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>
@endsection
