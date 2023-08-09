<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminPostTest(Request $request) {
        $userData = [
            'name' => $request->userName,
            'age' => $request->userAge,
            'address' => $request->userAddress,
            'gender' => $request->userGender
        ];
        dd($request->all(), $userData);
    }
}
