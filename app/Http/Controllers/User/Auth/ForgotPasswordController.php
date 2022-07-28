<?php

namespace App\Http\Controllers\User\Auth;

use App\Mail\UserVerifyEmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get the response for a successful password reset link.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendResetLinkResponse(Request $request, $response)
    {
        return ['status' => trans($response), 'send_flag' => 'successed'];
    }

    /**
     * Get the response for a failed password reset link.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        return response()->json(['email' => trans($response)], 400);
    }
    protected function sendResetLinkEmail(Request $request){
        $details = [
            'confirmation_code' => 'password.sent'
        ];
        \Mail::to($request['email'])->send(new UserVerifyEmail($details));
        // return new JsonResponse(
        //     [ 
        //         'success' => true, 
        //         'message' => "Thank you for subscribing to our email, please check your inbox"
        //     ], 
        //     200
        // );
        return response()->json(['send_flag' => 'successed'], 200);
    }
}
