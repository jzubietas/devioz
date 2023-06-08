<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Tool;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tool::get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = [];

                    $btn[] = '<a class="btn btn-info" href="'.route('services.show',$row->id).'">Ver</a>';
                    $btn[] = '<a class="btn btn-primary" href="'.route('services.edit',$row->id).'">Actualizar</a>';
                    return join('', $btn);
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('tools.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);

        $tool = Tool::create(['name' => $request->input('name')]);

        return redirect()->route('tools.index');
    }

    /**
     * Display the specified resource.
     *
     * @return void
     */
    public function show(Tool $tool)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tool  $tool
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tool = Tool::find($id);
        return view('tools.edit',compact('tool'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tool  $tool
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'photo' => 'nullable|image',
            'title' => 'required',
            'text' => 'required',
            'tool' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $tool = Tool::find($request->input('tool'));
        $tool->title = $request->input('title');
        $tool->text = $request->input('text');

        $filename=null;
        if ($request->file('photo')!=null)
        {
            $filename = $request->file('photo')->store('/', 'tools');

        }

        $tool->save();

        return response()->json(
            [
                'success'=>'Informacion correctamente actualizada',
                'title'=>$tool->title,
                'text'=>$tool->text,
                'identity' =>$tool->id,
                'photo' =>Storage::disk('tools')->url($filename),
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tool  $tool
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Tool::find($id)->delete();
        return redirect()->route('tools.index');
    }
}
