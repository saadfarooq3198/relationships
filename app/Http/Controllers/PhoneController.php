<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index(){
        $user = User::find(1)->phone;
        $phone = Phone::find(1)->user;
        dd($phone);
        dd($user);
    }
}
