<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Loginrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(FormRequest $request)
    {
        return [
            'ten' => 'required|max:225 string' ,
			 'tuoi' => 'numeric',
             'phone' => 'numeric',
             'ngay' => 'string',
             'web' => 'string',
             'diachi' => 'string',
        ];
    }
    public function messages()
{
    return [
        'ten.string' => 'vui lòng điền tên',
		'tuoi.numeric' => 'vui lòng điền tuoi',
		'ngay.string'  => 'vui lòng điền ngày tháng',
		'web.string' => 'vui lòng kiểm tra lại ký tự',
        'diachi.string' => 'vui lòng kiểm tra lại địa chỉ',
    ];
}
}
