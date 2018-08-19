<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFood extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
	{
		return [
			'name' => 'required',
			'img' => 'mimes:jpeg,png,jpg',
			'price' => 'required',
			'category' => 'required',
			'categoryfood' => 'required',
		];
	}
	public function messages() {
		return [
			'name.required' => 'Vui lòng nhập tên sản phẩm',
			'img.mimes' => 'Hình ảnh không đúng định dạng',
			'price.required' => 'Vui lòng nhập giá',
			'category.required' => 'Vui lòng chọn Loại ',
			'categoryfood.required' => 'Vui lòng chọn Loại Sản Phẩm',
		];
	}
}
