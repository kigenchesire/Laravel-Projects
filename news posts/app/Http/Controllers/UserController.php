<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
 //logout function
 public function login(Request $request){
    $incomingFields = $request->validate(
        [
            'loginemail'=> ['required', 'email'],
            'loginpassword'=>['required', 'min:6'], 
        ]
        );
        if(auth ()->attempt(['email'=>$incomingFields['loginemail'], 'password'=>$incomingFields['loginpassword']])){
            $request->session()->regenerate();

        }
        return redirect('/');


 }
 public function logout(){
    auth()->logout();
    return redirect('/');
 }
 public function register(Request $request){
    $incomingFields = $request->validate(
        [
            'name'=>'required',
            'email'=> ['required', 'email', Rule::unique('users', 'email')],
            'password'=>['required', 'min:6'], 
        ]
        );

    
$incomingFields['paasword'] = bcrypt($incomingFields['password']);
    $user = User::create($incomingFields);
    auth ()-> login($user);
    return redirect('/');
 }
}
