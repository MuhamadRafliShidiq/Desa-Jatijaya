<?php

namespace App\Http\Controllers\Auth;

use App\Charts\UsersByIdChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Role;
use Hash;
use Session;
use Validator;

class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard(User $user)
    {
        // if (Auth::check()) {
        //     $user = User::count();
        return view('dashboard');
        // }
        // return redirect("login")->withSucces('Opps! kamu belum login');
    }
    public function tentangkami(): View
    {
        return view('profil-desa.tentang-kami');
    }

    public function visimisi(): View
    {
        return view('profil-desa.visi&misi');
    }
    public function sejarah(): View
    {
        return view('profil-desa.sejarah');
    }
    public function berita(): View
    {
        return view('informasi.berita');
    }
    public function admin(): View
    {
        return view('admin.index');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration(): View
    {
        $roles = Role::all();
        return view('auth.registration', compact('roles'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            $user = User::where("email", $request->email)->first();
            $token = $user->createToken("API_TOKEN");

            session(['accessToken' => $token->plainTextToken]);

            return redirect()->intended('dashboard')
                ->withSuccess('You have Successfully logged in with token');
        }

        return redirect("login")->withSuccess('Oppes! You have entered invalid email or password');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request): RedirectResponse
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);

        $data = $request->all();
        // dd($data);
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Great! You have Successfully logged in');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    ##{
    ##     return view('dashboard');
    #}

    ##}

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
        return User::create([
            'fullname' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role']
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout(): RedirectResponse
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function handleLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::where("email", $request->email)->first();
        if (empty($user)) {
            return response(["message" => 'Email Not Found'], 400);
        }

        if (empty($user) || !Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // if (empty($user->email_verified_at)) {
        //     return response([
        //         "message" => "Important: Account Access Pending Email Verification. Please note that your account login is currently restricted until you verify your email address. To activate your account and access all the features, it's essential to complete the email verification process."
        //     ], 400);
        // }

        $token = $user->createToken("API_TOKEN");
        $user = $user->toArray();
        return response([
            "user" => $user,
            "accessToken" => $token->plainTextToken,
        ]);
    }

    public function handleRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required|in:admin,dev,owner,user',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        DB::beginTransaction();
        try {
            $user = User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => $request->password,
                "role" => $request->role,
            ]);

            DB::commit();
            return response([
                "message" => "User registered successfully"
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response($th);
        }
    }

    public function handleGetMe(Request $request)
    {
        $user = User::find($request->user()->id);

        return response([
            "user" => $user,
            "abilities" => $user->abilities
        ]);
    }
}