<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Site $site)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        //
    }

    public function changeBanner(Request $request)
    {
        // SIEMPRE valida tus datos
        $validator = Validator::make($request->all(), [
            'photo' => 'nullable|image|dimensions:min_width=1280,min_height=800|max:5000',
            'keySitePhoto'=>'required',
            'keySiteRubro'=>'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        if ($request->file('photo')!=null)
        {
            $filename = $request->file('photo')->store('/', 'banners_site');

            setting()->load();
            $key_setting=$request->keySitePhoto.$request->keySiteRubro;
            setting([ $key_setting=> ($filename)])->save();
            return response()->json(
                [
                    'success'=>'Informacion actualizada correctamente',
                    'keySitePhoto'=>$key_setting,
                    'photo' =>Storage::disk('banners_site')->url($filename),
                ]);
        }
        return response()->json(['errors'=>$validator->errors()->all()]);

    }

    public function alimentario(Request $request)
    {
        setting()->load();
        $site_banner_img=setting()->get('SitePhoto'.'Alimentario');
        $site_banner_img=Storage::disk('banners_site')->url($site_banner_img);
        return view('sites.alimentario',compact('site_banner_img'));
    }

    public function callcenter(Request $request)
    {
        setting()->load();
        $site_banner_img=setting()->get('SitePhoto'.'CallCenter');
        $site_banner_img=Storage::disk('banners_site')->url($site_banner_img);
        return view('sites.callcenter',compact('site_banner_img'));
    }

    public function comercio(Request $request)
    {
        setting()->load();
        $site_banner_img=setting()->get('SitePhoto'.'Comercio');
        $site_banner_img=Storage::disk('banners_site')->url($site_banner_img);
        return view('sites.comercio',compact('site_banner_img'));
    }

    public function consultoras(Request $request)
    {
        setting()->load();
        $site_banner_img=setting()->get('SitePhoto'.'Consultoras');
        $site_banner_img=Storage::disk('banners_site')->url($site_banner_img);
        return view('sites.consultoras',compact('site_banner_img'));
    }

    public function desarrollorural(Request $request)
    {
        setting()->load();
        $site_banner_img=setting()->get('SitePhoto'.'DesarrolloRural');
        $site_banner_img=Storage::disk('banners_site')->url($site_banner_img);
        return view('sites.desarrollorural',compact('site_banner_img'));
    }

    public function educacion(Request $request)
    {
        setting()->load();
        $site_banner_img=setting()->get('SitePhoto'.'Educacion');
        $site_banner_img=Storage::disk('banners_site')->url($site_banner_img);
        return view('sites.educacion',compact('site_banner_img'));
    }

    public function entretenimiento(Request $request)
    {
        setting()->load();
        $site_banner_img=setting()->get('SitePhoto'.'Entretenimiento');
        $site_banner_img=Storage::disk('banners_site')->url($site_banner_img);
        return view('sites.entretenimiento',compact('site_banner_img'));
    }

    public function financiero(Request $request)
    {
        setting()->load();
        $site_banner_img=setting()->get('SitePhoto'.'Financiero');
        $site_banner_img=Storage::disk('banners_site')->url($site_banner_img);
        return view('sites.financiero',compact('site_banner_img'));
    }

    public function software(Request $request)
    {
        setting()->load();
        $site_banner_img=setting()->get('SitePhoto'.'Software');
        $site_banner_img=Storage::disk('banners_site')->url($site_banner_img);
        return view('sites.software',compact('site_banner_img'));
    }

    public function update_site(Request $request, User $user)
    {


        $validated = $request->validate([
            // SIEMPRE valida tus datos
            'profile_picture' => ['image', 'max:2000'],
        ]);

        $filename = $request->file('profile_picture')->store('/', 'avatars');
        $user->profile_picture = $filename;
        $user->save();

    }

}
