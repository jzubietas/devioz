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
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);

        $thought = Thought::create(['name' => $request->input('name')]);

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
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'description' => 'required',
            'author' => 'required',
        ]);

        $thought = Thought::find($id);
        $thought->description = $request->input('description');
        $thought->author = $request->input('author');
        $thought->save();

        return redirect()->route('thoughts.index');
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
