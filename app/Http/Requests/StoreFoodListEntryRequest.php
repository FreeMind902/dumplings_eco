<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFoodListEntryRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'label_de' => 'required',
            'label_en' => 'required',
            'foodlist_information_de' => 'required',
            'foodlist_information_en' => 'required',
        ];
    }
  
  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array
   */
  public function messages()
  {
    return [
        'label_de.required' => 'Das Feld für die deutsche Überschrift ist leer.',
        'label_en.required' => 'Das Feld für die englische Überschrift ist leer.',
        'foodlist_information_de.required' => 'Das Feld für die deutsche Speiseinformationen ist leer.',
        'foodlist_information_en.required' => 'Das Feld für die englische Speiseinformationen ist leer.',
    ];
  }
}
