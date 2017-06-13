<?php

namespace App\Http\Controllers\Auth;

use DB;
use Mail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Mail\EmailVerification;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'usuarios/home';

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'empresa' => 'required|max:255',
            'representante' => 'required|max:255',
            'direccion' => 'required|max:255',
            'telefono' => 'required|max:255',
            'ciudad' => 'required|max:255',
            'rfc' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data){
        return User::create([
            'empresa' => $data['empresa'],
            'representante' => $data['representante'],
            'direccion' => $data['direccion'],
            'telefono' => $data['telefono'],
            'rfc' => $data['rfc'],
            'ciudad_id' => $data['ciudad'],
            'servicios_id' => $data['servicios'],
            'subarea_id' => $data['subarea'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'email_token' => base64_encode($data['email']),
        ]);

    }
    /**
* Handle a registration request for the application.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
    public function register(Request $request)
    {
        // Laravel validation

        $input = $request->all();
        $validator = $this->validator($input);

        if ($validator->fails()) 
        {
            $this->throwValidationException($request, $validator);
        }

        if($validator->passes()){
            $data = $this->create($input)->toArray();
            $data['email_token'] = str_random(25);

            $user = User::find($data['id']);
            $user->email_token = $data['email_token'];
            $user->save();
            Mail::send('emails.user.verificacionusuario', $data, function($message) use($data){
                $message->to($data['email']);
                $message->subject('Confimacion de Registro');
            });
            return redirect(route('login'))->with('status', 'Se ha enviado una confirmacion al correo, favor de verificarlo');
        }
        return redirect(route('login'))->width('status', $validator->errors);
        // Using database transactions is useful here because stuff happening is actually a transaction
        // I don't know what I said in the last line! Weird!
        // DB::beginTransaction();
        // try
        // {
        //     $user = $this->create($request->all());
        //     // After creating the user send an email with the random token generated in the create method above
        //     $email = new EmailVerification(new User(['email_token' => $user->email_token, 'name' => $user->name]));
        //     Mail::to($user->email)->send($email);
        //     DB::commit();
        //     return back();
        // }
        // catch(Exception $e)
        // {
        //     DB::rollback(); 
        //     return back();
        // }
    }
    /**
    * Handle a registration request for the application.
    *
    * @param $token
    * @return \Illuminate\Http\Response
    */
    public function verificado($token)
    {
        $user = User::where('email_token',$token)->firstOrFail();

        if(!is_null($user)){
            $user->verified = 1;
            $user->email_token = '';
            $user->save();
            return redirect(route('login'))->with('status', 'La activacion exitosa.');
        }
        return redirect('login')->with('status', 'Algo ha salido mal, intenta mas tarde.');
    }
}
