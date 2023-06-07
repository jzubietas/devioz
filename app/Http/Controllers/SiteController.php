<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

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

    public function alimentario(Request $request)
    {
        return view('sites.alimentario');
    }

    public function callcenter(Request $request)
    {
        return view('sites.callcenter');
    }

    public function comercio(Request $request)
    {
        return view('sites.comercio');
    }

    public function consultoras(Request $request)
    {
        return view('sites.consultoras');
    }

    public function desarrollorural(Request $request)
    {
        return view('sites.desarrollorural');
    }

    public function educacion(Request $request)
    {
        return view('sites.educacion');
    }

    public function entretenimiento(Request $request)
    {
        return view('sites.entretenimiento');
    }

    public function financiero(Request $request)
    {
        return view('sites.financiero');
    }

    public function software(Request $request)
    {
        return view('sites.software');
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
