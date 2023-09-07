<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['string', 'max:50', Rule::unique(User::class)->ignore($this->user()->id)],
            'name' => ['string', 'max:255'],
            'address' => ['max:255'],
            'phone' => ['number', 'max:12', Rule::unique(User::class)->ignore($this->user()->id)],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }

    public function messages() {
        return [
            'username.unique' => 'Tên đăng nhập đã tồn tại.',
            'email.unique' => 'Email đã tồn tại.',
            'phone.number' => 'Số điện thoại phải là số.',
            'phone.max' => 'Số điện thoại tối đa 12 chữ số.',
            'phone.unique' => 'Số điện thoại đã tồn tại.',
        ];
    }
}
