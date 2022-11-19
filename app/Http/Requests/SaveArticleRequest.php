<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class SaveArticleRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return match (request()->method) {
            'POST' => [
                'user_id' => 'required|exists:users,id',
                'title' => 'required|string|min:1|max:50',
                'description' => 'nullable|string|min:1',
                'body' => 'nullable|string|min:1',
                'image_url' => 'nullable|string',
                'tags' => 'nullable|array',
            ],
            'PUT',
            'PATCH' => [
                'user_id' => 'exists:users,id',
                'title' => 'string|min:1|max:50',
                'description' => 'nullable|string|min:1',
                'body' => 'nullable|string|min:1',
                'image_url' => 'nullable|string',
                'tags' => 'nullable|json',
            ]
        };
    }
}
