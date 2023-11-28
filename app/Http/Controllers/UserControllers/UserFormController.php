<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;


class UserFormController extends Controller {
    public function index(): View {
        return view('user.form');
    }

    public function save_user(Request $request): RedirectResponse {

        $validate = $request -> validate(
            [
                "name"=> "required",
                "lastname" => "required",
                "email" => "required | email"
            ],
            [
                "name.required" => "Enter the name",
                "lastname.required" => "Enter the lastname",
                "email.required" => "Enter the email",
                "email.email" => "Incorrect email",
            ]
        );

        $path = '/user/';
        if(!Storage::exists($path)){
            Storage::makeDirectory($path);
        }

        Storage::put($path . uniqid() . '.json', json_encode($validate));
        return redirect('/form') -> with('success_message', 'Your data was saved successfully');
    }
}
