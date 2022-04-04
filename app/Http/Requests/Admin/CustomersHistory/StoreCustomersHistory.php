<?php

namespace App\Http\Requests\Admin\CustomersHistory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreCustomersHistory extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.customers-history.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['nullable', 'string'],
            'age' => ['nullable', 'string'],
            'customer_code' => ['nullable', 'string'],
            'visit_date' => ['nullable', 'string'],
            'KHAMBENH' => ['nullable', 'string'],
            'BENHSU' => ['nullable', 'string'],
            'LYDO' => ['nullable', 'string'],
            'customer_id' => ['nullable', 'string'],
            
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
