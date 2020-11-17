<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PasteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function getValidatorInstance()
    {
        $validator = parent::getValidatorInstance();

        if(!Auth::check()){
            $user = null;
        }
        $user = Auth::user();
   
	    $validator->sometimes('name', 'required|min:4|', function($input) use($user)
	    {
			
			if(!(isset($user->name)) ) {
				return TRUE;
			}
			
			return FALSE;
	    });

	    return $validator;
    }
    public function rules()
    {
        return [
            //
        
		'text' => 'required'
        ];
    }
}
