<?php

namespace App\Http\Controllers;

use App\Mail\MyTestEmail;
use App\Models\Service;
use App\Models\Tool;
use App\Models\User;
use App\Models\Thought;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::find(auth()->user()->id);
        $thoughts = Thought::get();
        $services = Service::get();
        $tools = Tool::get();
        setting()->load();
        $usTitle=setting()->get('usTitle');
        $usText=setting()->get('usText');
        $homeBanner=Storage::disk('banners')->url(setting()->get('HomePhoto'));

        return view('home',compact(
            'user',
            'usTitle',
            'usText','homeBanner','thoughts','services','tools'));
    }

    public function storeNosotros(Request $request)
    {
        // SIEMPRE valida tus datos
        $validator = Validator::make($request->all(), [
            'usTitle' => 'required',
            'usText' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        /**/
        $user=User::find(auth()->user()->id);
        if ($request->file('photo')!=null)
        {
            $filename = $request->file('photo')->store('/'.$user->id.'', 'avatars');
            $user->profile_picture = $filename;
            $user->save();
        }
        /**/
        //User::create($input);
        return response()->json(
            [
                'success'=>'Informacion correctamente actualizada',
                'avatar'=>$user->profile_picture_url,
                'identity' =>$user->id
            ]);
    }

    public function changeBanner(Request $request)
    {
        // SIEMPRE valida tus datos
        $validator = Validator::make($request->all(), [
            'photo' => 'nullable|image',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        if ($request->file('photo')!=null)
        {
            $filename = $request->file('photo')->store('/', 'banners');

            setting()->load();
            setting([$request->keyHomePhoto => ($filename)])->save();
            return response()->json(
                [
                    'success'=>'Informacion actualizada correctamente',
                    'keyHomePhoto'=>$request->keyHomePhoto,
                    'photo' =>Storage::disk('banners')->url($filename),
                ]);
        }
        return response()->json(['errors'=>$validator->errors()->all()]);

    }

    public function sendEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'service' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $details = [
            'title' => 'Mail from DevIoz.com',
            'body' => 'This is for testing email using smtp'
        ];

        Mail::to('jhonathanisaizubietasantos@gmail.com')->send(new MyTestEmail($details));

        return response()->json(
            [
                'success'=>'Informacion enviada correctamente',
                'mail'=>'jhonathanisaizubietasantos@gmail.com'
            ]);
    }
}
