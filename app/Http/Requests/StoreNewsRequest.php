<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest {
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
        'news.heading'        => 'required|max:48',
        'news.content'        => 'required',
        'news.start'        => 'required',
        'news.end'        => 'required',
    ];
  }
  
  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array
   */
  public function messages() {
    return [
        'news.heading.required' => 'Das Feld für die Überschrift ist noch leer.',
        'news.heading.max:32'   => 'Der Betreff sollte unter 48 Zeichen enthalten, so ist er in der Email gut erkennbar.',
        'news.content.required' => 'Der News hat keinen Inhalt',
        'news.content.required' => 'Der News hat keinen Start',
        'news.content.required' => 'Der News hat kein Ende',
    ];
  }
}
