<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubCategoryRequest extends FormRequest {
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize() {
    return true;
  }
  
  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules() {
    return [
        'label_de' => 'required|string',
        'label_en' => 'required|string',
        'sub_category_information_de' => 'required|string',
        'sub_category_information_en' => 'required|string',
    ];
  }
  
  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array
   */
  public function messages() {
    return [
        'label_de.required' => 'Das Feld für den deutschen Namen der Kategorie ist leer.',
        'label_en.required' => 'Das Feld für den englischen Namen der Kategorie ist leer.',
        'sub_category_information_de.required' => 'Das Feld für den deutschen Informationtext der Kategorie ist leer.',
        'sub_category_information_en.required' => 'Das Feld für den englischen Informationtext der Kategorie ist leer.',

    ];
  }
}
