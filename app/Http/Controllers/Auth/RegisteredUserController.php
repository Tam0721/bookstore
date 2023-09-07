<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request['username'] = Str::lower($request['username']);       

        $request->validate(
            [
                'username' => ['required', 'string', 'max:50', 'unique:'.User::class],
                'name' => ['required', 'string', 'max:255', 'min:3'],
                'phone' => ['numeric', 'unique:'.User::class],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ],

            [
                'username.required' => 'Tên đăng nhập không được để trống.',
                'username.string' => 'Tên đăng nhập phải là chuỗi.',
                'username.max' => 'Tên đăng nhập dài hơn 50 kí tự.',
                'username.unique' => 'Tên đăng nhập đã tồn tại.',
                'name.required' => 'Họ tên không được để trống.',
                'name.string' => 'Họ tên phải là chuỗi.',
                'name.max' => 'Họ tên vượt quá 255 kí tự.',
                'name.min' => 'Họ tên ngắn hơn 3 kí tự.',
                'phone.numeric' => 'Số điện thoại phải là số.',
                'phone.unique' => 'Số điện thoại đã tồn tại.',
                'email.required' => 'Email không được để trống.',
                'email.string' => 'Email phải là chuỗi.',
                'email.email' => 'Email chưa đúng định dạng.',
                'email.max' => 'Email vượt quá 255 kí tự.',
                'email.unique' => 'Email đã tồn tại.',
                'password.required' => 'Mật khẩu không được để trống.',
                'password.confirmed' => 'Mật khẩu xác nhận không chính xác.',
            ]);

        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        return redirect(auth() -> user() -> getRedirectRoute());
    }
}
