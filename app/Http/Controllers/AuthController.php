<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Libs\ConfigUtil;
use App\Services\AuthService;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected AuthService $authService;

    public function __construct(AuthService $authService) {
        $this->authService = $authService;
    }

    /**
     * Render login page
     */
    public function login() {
        return view('screens.auth.login');
    }

    /**
     * Handle login
     * @param LoginRequest $request
     */
    public function handleLogin(LoginRequest $request) {
        $credentials = $request->only('email', 'password');
        if ($this->authService->handleLogin($credentials)) {
            session()->regenerate();

            return redirect()->intended(route('top.index'));
        }

        return redirect()->back()->withInput()->withErrors(ConfigUtil::getMessage('ECL019'));
    }

    /**
     * Logout the currently authenticated user.
     */
    public function logout() {
        Auth::logout();
        session()->flush();
        session()->invalidate();

        return redirect()->route('login');
    }
}
