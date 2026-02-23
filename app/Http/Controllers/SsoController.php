<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SsoController extends Controller
{
    public function generateToken()
    {
        $user = Auth::user();

        // পুরনো token delete করো
        DB::table('sso_tokens')->where('user_id', $user->id)->delete();

        // নতুন token তৈরি করো
        $token = Str::random(64);

        DB::table('sso_tokens')->insert([
            'user_id'    => $user->id,
            'token'      => $token,
            'email'      => $user->email,
            'name'       => $user->name,
            'expires_at' => now()->addMinutes(5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // .env থেকে URL নাও
        $foodpandaUrl = env('FOODPANDA_URL', 'http://localhost:8001') . '/sso-login?token=' . $token;

        return redirect($foodpandaUrl);
    }
}