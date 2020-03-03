<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class RequestPassword extends Controller
{
    /**
     * Page de demande d'un mot de passe
     *
     * @return Factory|View
     */
    public function getPassword()
    {
        return view('auth.request-password');
    }

    /**
     * Traitement de la demande de mot de passe
     *
     * @param Request $request
     * @return string
     */
    public function requestPassword(Request $request)
    {
        $fbo_number = $request->input('fbo_number');
        $last_name = $request->input('last_name');
        $first_name = $request->input('first_name');
        $tel = $request->input('tel');
        $email = $request->input('email');
        $city_code = $request->input('city_code');
        $city = $request->input('city');

        Mail::send('auth.emails.requestPasscode', ['request' => $request], function ($message) use($first_name, $email) {
            $message->from('contact'.strtolower(env('APP_NAME').'.fr'), env('APP_NAME'));

            $message->to($email, $first_name)->subject('Demande de mot de passe');
        });

        return route('confirm.requestPassword');
    }

    /**
     * Page de confirmation après la demande de mot de passe
     *
     * @return Factory|View
     */
    public function confirmRequestPassword()
    {
        return view('auth.confirm-request-password');
    }
}
