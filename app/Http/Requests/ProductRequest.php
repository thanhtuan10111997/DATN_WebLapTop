<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'price' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'image_id[]' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'descript' => 'required',
            'screen' => 'required',
            'os' => 'required',
            'back_camera' => 'required',
            'front_camera' => 'required',
            'ram' => 'required',
            'memory' => 'required',
            'battery_capacity' => 'required',
            'quantities' => 'required|min:1|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('Bạn chưa nhập tên sản phẩm'),
            'descript.required' => __('Bạn chưa nhập mô tả'),
            'screen.required' => __('Bạn chưa nhập màn hình'),
            'os.required' => __('Bạn chưa nhập hệ điều hành'),
            'back_camera.required' => __('Bạn chưa nhập card màn hình'),
            'front_camera.required' => __('Bạn chưa nhập CPU'),
            'ram.required' => __('Bạn chưa nhập RAM'),
            'memory.required' => __('Bạn chưa nhập ổ cứng'),
            'battery_capacity.required' => __('Bạn chưa nhập cổng kết nối'),
            'quantities.required' => __('Bạn chưa nhập số lượng sản phẩm'),
            'quantities.min' => __('Số lượng sản phẩm phải lớn hơn 0'),
            'price.required' => __('Bạn chưa nhập giá bán'),
            'avatar.required' => __('Bạn chưa nhập ảnh đại diện'),
            'avatar.mimes' => __('Ảnh không đúng định dạng'),
            'avatar.max' => __('Ảnh tối đa 4MB'),
            'image_id[].mimes' => __('Ảnh không đúng định dạng'),
            'image_id[].max' => __('Ảnh tối đa 4MB'),
        ];
    }
}
