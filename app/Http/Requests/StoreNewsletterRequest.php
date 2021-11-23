<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsletterRequest extends FormRequest {
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
        'newsletter.subject'        => 'required|max:32',
        'newsletter.heading'        => 'required|max:48',
        'newsletter.second_heading' => 'nullable',
        'newsletter.content'        => 'required',
    ];
  }
  
  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array
   */
  public function messages() {
    return [
        'newsletter.subject.required' => 'Das Feld für den Betreff ist noch leer.',
        'newsletter.subject.max:32'   => 'Der Betreff sollte unter 32 Zeichen enthalten, so ist er in der Email gut erkennbar.',
        'newsletter.heading.required' => 'Das Feld für die Überschrift ist noch leer.',
        'newsletter.heading.max:32'   => 'Der Betreff sollte unter 48 Zeichen enthalten, so ist er in der Email gut erkennbar.',
        'newsletter.content.required' => 'Der Newsletter hat keinen Inhalt',
    ];
  }
}
