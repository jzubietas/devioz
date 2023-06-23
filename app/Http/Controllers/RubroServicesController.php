<?php

namespace App\Http\Controllers;

use App\Models\RubroServices;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RubroServicesController extends Controller
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
        $validator = Validator::make($request->all(), [
            'photo' => 'nullable|image|dimensions:min_width=1280,min_height=800|max:5000',
            'title' => 'required',
            'text' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $servicerubro = RubroServices::create([
            'rubro'=>'',
            'title' => $request->input('title'),
            'text' => $request->input('text'),
        ]);

        $filename=null;
        if ($request->file('photo')!=null)
        {
            $filename = $request->file('photo')->store('/', 'services');
            $servicerubro->update([
                'photo'=>$filename
            ]);

        }

        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RubroServices  $rubroServices
     * @return \Illuminate\Http\Response
     */
    public function show(RubroServices $rubroServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RubroServices  $rubroServices
     * @return \Illuminate\Http\Response
     */
    public function edit(RubroServices $rubroServices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RubroServices  $rubroServices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            //'photo' => 'nullable|image|dimensions:min_width=1280,min_height=800|max:5000',
            'photo' => 'nullable|image|max:5000',
            'title' => 'required',
            'text' => 'required',
            'servicerubro' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $servicerubro = RubroServices::find($request->input('servicerubro'));
        $servicerubro->title = $request->input('title');
        $servicerubro->text = $request->input('text');

        $filename=null;
        if ($request->file('photo')!=null)
        {
            $filename = $request->file('photo')->store('/', 'servicesrubro');
            $servicerubro->photo=$filename;
        }

        $servicerubro->save();

        return response()->json(
            [
                'success'=>'Informacion correctamente actualizada',
                'title'=>$servicerubro->title,
                'text'=>$servicerubro->text,
                'identity' =>$servicerubro->id,
                'photo' =>Storage::disk('servicesrubro')->url($filename),
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RubroServices  $rubroServices
     * @return \Illuminate\Http\Response
     */
    public function destroy(RubroServices $rubroServices)
    {
        //
    }
}
