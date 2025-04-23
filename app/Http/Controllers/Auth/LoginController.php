<?php

namespace App\Http\Controllers\Auth;
 
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
     
    protected function redirectTo()
    {
        // Get the authenticated user's role
        $role = auth()->user()->role;

        // Redirect based on the role
        switch ($role) {
            case 'admin':
                return '/admin/dashboard';
            case 'super-admin':
                return '/super-admin/dashboard';
            case 'user':
                return '/user/dashboard';
            default:
                return '/'; // Fallback route
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
