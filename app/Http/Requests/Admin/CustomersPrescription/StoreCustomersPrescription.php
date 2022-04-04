<?php

namespace App\Http\Requests\Admin\CustomersPrescription;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreCustomersPrescription extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.customers-prescription.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'full_name' => ['nullable', 'string'],
            'T1' => ['nullable', 'string'],
            'T2' => ['nullable', 'string'],
            'T3' => ['nullable', 'string'],
            'T4' => ['nullable', 'string'],
            'T5' => ['nullable', 'string'],
            'T6' => ['nullable', 'string'],
            'T7' => ['nullable', 'string'],
            'T8' => ['nullable', 'string'],
            'T9' => ['nullable', 'string'],
            'T10' => ['nullable', 'string'],
            'T11' => ['nullable', 'string'],
            'T12' => ['nullable', 'string'],
            'T13' => ['nullable', 'string'],
            'T14' => ['nullable', 'string'],
            'T15' => ['nullable', 'string'],
            'T16' => ['nullable', 'string'],
            'T17' => ['nullable', 'string'],
            'T18' => ['nullable', 'string'],
            'T19' => ['nullable', 'string'],
            'T20' => ['nullable', 'string'],
            'N1' => ['nullable', 'string'],
            'N2' => ['nullable', 'string'],
            'N3' => ['nullable', 'string'],
            'N4' => ['nullable', 'string'],
            'N5' => ['nullable', 'string'],
            'N6' => ['nullable', 'string'],
            'N7' => ['nullable', 'string'],
            'N8' => ['nullable', 'string'],
            'N9' => ['nullable', 'string'],
            'N10' => ['nullable', 'string'],
            'N11' => ['nullable', 'string'],
            'N12' => ['nullable', 'string'],
            'N13' => ['nullable', 'string'],
            'N14' => ['nullable', 'string'],
            'N15' => ['nullable', 'string'],
            'N16' => ['nullable', 'string'],
            'N17' => ['nullable', 'string'],
            'N18' => ['nullable', 'string'],
            'N19' => ['nullable', 'string'],
            'N20' => ['nullable', 'string'],
            'customer_code' => ['nullable', 'string'],
            'visit_date' => ['nullable', 'string'],
            'CANBENH' => ['nullable', 'string'],
            'CAPBAC' => ['nullable', 'string'],
            'DONVI' => ['nullable', 'string'],
            'DONTHUOC' => ['nullable', 'string'],
            'customer_id' => ['nullable', 'string'],
            'customer_history_id' => ['nullable', 'string'],
            
        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
