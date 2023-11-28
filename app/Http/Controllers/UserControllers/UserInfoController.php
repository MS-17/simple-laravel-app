<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;


class UserInfoController extends Controller {
    public function index(): View {
        $users = [];
        $path = storage_path('app/user/') . "*.json";        
        foreach (glob($path) as $idx => $json_file) {
            $users[$idx] = json_decode(file_get_contents($json_file));
        }
        return view("user.users_table", ["data" => $users]);
    }
}

