<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
        setting()->load();
        $usTitle=setting()->get('usTitle');
        $usText=setting()->get('usText');
        $homeBanner=Storage::disk('banners')->url(setting()->get('HomePhoto'));

        return view('home',compact('user','usTitle','usText','homeBanner'));
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
}
