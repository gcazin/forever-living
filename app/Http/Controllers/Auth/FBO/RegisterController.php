<?php

namespace App\Http\Controllers\Auth\FBO;

use App\Http\Controllers\Controller;
use App\Mail\RequestPassword;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class RegisterController extends Controller
{
    /**
     * Page de demande d'un mot de passe
     *
     * @return Factory|View
     */
    public function showRegisterForm()
    {
        return view('auth.fbo.register');
    }

    /**
     * Traitement de la demande de mot de passe
     *
     * @param Request $request
     * @return string
     */
    public function sendRegister(Request $request)
    {
        $fbo_number = $request->input('fbo_number');
        $last_name = $request->input('last_name');
        $first_name = $request->input('first_name');
        $tel = $request->input('tel');
        $email = $request->input('email');
        $city_code = $request->input('city_code');
        $city = $request->input('city');

        Mail::to($request->input('email'))->send(new RequestPassword());

        /*Mail::send('auth.emails.request-password', ['request' => $request], function ($message) use($first_name, $email) {
            $message->from('contact@foreverliving.fr', env('APP_NAME'));

            $message->to($email, $first_name)->subject('Demande de mot de passe');
        });*/

        return redirect(route('confirmation.register.fbo'));
    }

    /**
     * Page de confirmation après la demande de mot de passe
     *
     * @return Factory|View
     */
    public function confirmRegister()
    {
        return view('auth.fbo.register-confirm');
    }
}
