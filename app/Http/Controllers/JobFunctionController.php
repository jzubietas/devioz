<?php

namespace App\Http\Controllers;

use App\Models\JobFunction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\Job;
use Illuminate\Support\Arr;
use DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class JobFunctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax())
        {
            $data = JobFunction::get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = [];

                    $btn[] = '<a class="btn btn-info" href="'.route('jobsfunction.show',$row->id).'">Ver</a>';
                    $btn[] = '<a class="btn btn-primary" href="'.route('jobsfunction.edit',$row->id).'">Actualizar</a>';

                    return join('', $btn);
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('jobsfunction.index', [
            //'permissions' => $permissions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobsfunction.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $input = $request->all();
        //$input['password'] = Hash::make($input['password']);

        $user = JobFunction::create($input);
        //$user->assignRole($request->input('roles'));

        return redirect()->route('jobsfunction.index');
    }

    /**
     * Display the specified resource.
     *
     * @param JobFunction $jobFunction
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobFunction = JobFunction::find($id);
        return view('jobsfunction.show',compact('jobFunction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param JobFunction $jobFunction
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobfunction = JobFunction::find($id);
        return view('jobsfunction.editar',compact('jobfunction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $input = $request->all();

        $jobfunction = JobFunction::find($id);
        $jobfunction->update($input);

        return redirect()->route('jobsfunction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param JobFunction $jobFunction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JobFunction::find($id)->delete();
        return redirect()->route('jobsfunction.index');
    }
}
