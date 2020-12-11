<?php

namespace App\Http\Controllers\Site\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Shipu\Themevel\Facades\Theme;

class ProfileController extends Controller
{
    public function show(User $user){
        $theme = optional($user->theme);
        Theme::set($theme->title ?? config('theme.active'));
        return view('profile' , get_defined_vars());
    }
}
