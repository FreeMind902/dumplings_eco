<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubscriberRequest extends FormRequest {
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
        'subscriber.name'        => 'required|max:64',
        'subscriber.email'        => 'required|email|max:255',
    ];
  }
  
  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array
   */
  public function messages() {
    return [
        'subscriber.name.required' => 'Das Feld für den Namen ist noch leer.',
        'subscriber.name.max.64'   => 'Der Betreff sollte unter 64 Zeichen enthalten, so ist er in der Email gut erkennbar.',
        'subscriber.email.required' => 'Das Feld für die Email-Adresse ist noch leer.',
        'subscriber.email.email' => 'Die Email-Adresse hat ein ungültiges Format',
        'subscriber.email.max.255'   => 'Der Betreff sollte unter 255 Zeichen enthalten, so ist er in der Email gut erkennbar.',
    ];
  }
}
