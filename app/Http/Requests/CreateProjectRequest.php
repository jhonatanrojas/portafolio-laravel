<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Project;
use Illuminate\Support\Facades\Gate;	
class CreateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
       return Gate::authorize('create', new Project);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required',
            'url'=>['required','unique:projects'],
            'description'=>'required',
            'category_id'=>['required',
                            'exists:categories,id'],
          
            'image'=>['required','image','max:2000'],
            //mimes:jpg,png
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Coloca el puto titulo'
        
        ];
        
    }
}
