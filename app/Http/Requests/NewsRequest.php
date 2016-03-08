<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class NewsRequest extends Request {

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
			'name' => 'required|unique:news,name|max:255',
			'description' => 'required',
			'content' => 'required'
		];
	}
	public function messages (){
		return [
			'name.required'=>'Tiêu đề tin không được để trống',
			'name.unique'	=> 'Tiêu đề tin đã tồn tại',
			'description.required'=>'Mô tả ngắn không được để trống',
			'content.required'=>'Nội dung không được để trống'
		];
	}

}
