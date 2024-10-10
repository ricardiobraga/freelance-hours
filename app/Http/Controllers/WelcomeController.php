<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function __invoke(Request $request)
    {
        $user = User::query()->find(1);
    //    $user = User::query()->create([
    //         'name' => 'Olga',
    //         'email' => 'olga@gmail.com',
    //         'password' => '123456',
    //     ]);

        
        

        return view('welcome');
    }
}
