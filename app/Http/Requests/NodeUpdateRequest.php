<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NodeUpdateRequest extends FormRequest
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
            // 'system_uptime' => 'date',
            // 'total_ram' => 'integer',
            // 'allocated_ram' => 'integer',
            // 'total_disk' => 'integer',
            // 'allocated_disk' => 'integer',
         ];
    }
}
