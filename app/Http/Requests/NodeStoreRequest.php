<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NodeStoreRequest extends FormRequest
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
        return [
            'system_uptime' => 'required|string',
            'total_ram' => 'required|integer',
            'allocated_ram' => 'required|integer',
            'total_disk' => 'required|integer',
            'allocated_disk' => 'required|integer',
        ];
    }
}
