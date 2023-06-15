<?php

namespace App\Http\Controllers;

use App\Models\Thought;
use DataTables;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ThoughtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Thought::get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = [];

                    $btn[] = '<a class="btn btn-info" href="'.route('thoughts.show',$row->id).'">Ver</a>';
                    $btn[] = '<a class="btn btn-primary" href="'.route('thoughts.edit',$row->id).'">Actualizar</a>';
                    return join('', $btn);
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('thoughts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('thoughts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required',
            'author' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $thought = Thought::create([
            'description' => $request->input('description'),
            'author' => $request->input('author'),
        ]);

        return redirect()->route('thoughts.index');
    }

    /**
     * Display the specified resource.
     *
     * @return void
     */
    public function show(Thought $thoughts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $thought = Thought::find($id);

        return view('thoughts.edit',compact('thought'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required',
            'author' => 'required',
            'thought' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $thought = Thought::find($request->input('thought'));
        $thought->description = $request->input('description');
        $thought->author = $request->input('author');
        $thought->save();

        return response()->json(
            [
                'success'=>'Informacion correctamente actualizada',
                'description'=>$thought->description,
                'author'=>$thought->author,
                'identity' =>$thought->id
            ]);

        //return redirect()->route('thoughts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        Thought::find($id)->delete();
        return redirect()->route('thoughts.index');
    }
}
