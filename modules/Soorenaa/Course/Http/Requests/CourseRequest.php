<?php 

namespace Soorenaa\Course\Http\Requests;

use Soorenaa\Course\Models\Course;
use Soorenaa\Course\Rules\ValidTeacher;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check() == true;
    }

    public function rules()
    {
        return [
            "title" => 'required|min:3|max:190',
            "slug" => 'required|min:3|max:190|unique:courses,slug',
            "priority" => 'nullable|numeric',
            "price" => 'required|numeric|min:0|max:10000000',
            "percent" => 'required|numeric|min:0|max:100',
            "teacher_id" => ['required' , 'exists:users,id' , new ValidTeacher()],
            "type" => ["required", Rule::in(Course::$types)],
            "status" => ["required", Rule::in(Course::$statuses)],
            "category_id" => 'required|exists:categories,id',
            "image" => 'required|mimes:jpg,png,jpeg',
        ];

    }
}