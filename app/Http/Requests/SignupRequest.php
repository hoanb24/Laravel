<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required |max:255 |string',
            'age'=>'numeric',
            'date'=>'string',
            'phone'=>'numeric',
            'web'=>'string',
            'address'=>'string'
        ];
    }
    public function messages()
    {
        return [
            'name.string'=>'Vui lòng điền tên cho đúng',
            'age.numeric'=>'Vui lòng nhập tuổi cho đúng',
            'date.string'=>'Vui lòng điền lại ngày tháng',
            'phone.numeric'=>'Vui lòng kiểm tra lại sđt',
            'web.string'=>'Vui lòng nhập kiểm tra lại kí tự',
            'name.string'=>'Vui lòng nhập lại địa chỉ'
        ];
    }
}
