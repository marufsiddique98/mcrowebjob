<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $sitInfo        = getSiteInfo();
        $sitelogo       = $sitInfo['site_dark_logo'];
        $auth_bg        = setting('_site.auth_bg');

        if( !empty($auth_bg) ){
            $auth_bg  = $auth_bg[0]['path'];
        }
        return view('front-end.auth.login', compact('sitelogo', 'auth_bg'));
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $userStatus = User::where('email', $request->email)->select('status')->first();
        if(!empty($userStatus)){
            if( $userStatus->status == 'deactivated'){
                throw ValidationException::withMessages([
                    'email' => trans('auth.user_account_blocked'),
                ]);
            }
        }



        $request->authenticate();

        $request->session()->regenerate();

        $url = getLoginRedirect();

        return redirect()->intended($url);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
