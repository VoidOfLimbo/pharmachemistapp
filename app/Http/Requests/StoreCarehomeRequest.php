<?php

namespace App\Http\Requests;

use App\Models\Carehome;
use Illuminate\Foundation\Http\FormRequest;

class StoreCarehomeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // dd($this);
        return $this->user()->can('create', Carehome::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'    => [
                'string',
                'required',
            ],
            'status_id.*' =>[
                'required',
                'array',
            ],
            'status_id'   => [
                'exists:statuses,id',
            ],
            'total_patients' => [
                'required|integer',
            ],
            'week.*'   => [
                'required',
                'array',
            ],
            // 'week'   => [
            //     'integer',
            // ],
        ];
    }
}
