<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        auth()->guard('web')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return response()->json([
            'message' => 'successfully logout'
        ]);
    
    }
}
