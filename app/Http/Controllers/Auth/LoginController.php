<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Participante;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\User;

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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index(Request $request)
    {
        $login = null;
        $message = $request->session()->get('message');
        $request->session()->remove('message');

        return view('login.index', compact('login', 'message'));
    }

    public function login(Request $request) {
        $nick = $request->input('nick');
        $password = $request->input('password');
        
            $userData = User::where('nick', $nick)->first();
            if ($userData != null) {
                if ($userData && Hash::check($password, $userData->password)) {
                    $credentials = Input::only('nick', 'password');
                    if (Auth::attempt($credentials)) {
                        return redirect()->route('dashboard');
                    }
                }
                $this->makeMessages($request, "Não foi possível realizar o login, verifique os dados");
                return redirect()->route('login');
            } else {
                $userData = Participante::where('nick', $nick)->first();
                if ($userData != null) {
                    if ($userData && Hash::check($password, $userData->senha)) {
                        $credentials = Input::only('nick', 'password');
                        if (Auth::attempt($credentials)) {
                            return redirect()->route('dashboard');
                        }
                        $this->makeMessages($request, "passou");
                    }
                    return redirect()->route('login');
                }
                $this->makeMessages($request, "Nick não cadastrado");
                return redirect()->route('login');
            }
    }

    private function makeMessages(Request $request, $message)
    {
        $request->session()
            ->flash(
                'message',
                $message
            );

        return $request;
    }
}
