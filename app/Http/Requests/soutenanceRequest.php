<?php

namespace App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class soutenanceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
   
    public function rules(): array
    {
        
        return [
            'numjury'=>"required|min:1",
'note'=>"required|numeric|between:0,99.99 ",
'datesoutenance'=>"required|date|after_or_equal:".Carbon::today()->toDateString(),

        ];
    }
}
