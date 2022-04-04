<?php

namespace App\Http\Requests\Admin\Medicine;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateMedicine extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.medicine.edit', $this->medicine);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'code' => ['sometimes', 'string'],
            'name' => ['nullable', 'string'],
            'mfg_date' => ['nullable', 'date'],
            'exp_date' => ['nullable', 'date'],
            'made_in' => ['nullable', 'string'],
            'medication_components' => ['nullable', 'string'],
            'notes' => ['nullable', 'string'],
            'ID' => ['sometimes', Rule::unique('medicine', 'ID')->ignore($this->medicine->getKey(), $this->medicine->getKeyName()), 'string'],
            
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
