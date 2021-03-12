<?php 

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
 // ici de fait la requette du formulaire
class utilisateurRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */  
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */ 
    public function rules()
    {
        return [
            'nom'=> 'required|nom|unique:nom',
            'prenom'=> 'required|prenom|max:60',
            'role'=> 'required|role|unique:role',
            'email'=> 'required|email|unique:email',
            'password'=> 'required|password|unique:password',
            'confirm_password'=> 'required|confirm_password|unique:confirm_password',];
    }
}
