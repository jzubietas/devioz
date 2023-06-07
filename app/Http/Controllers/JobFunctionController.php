<?php

namespace App\Http\Controllers;

use App\Models\JobFunction;
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
     * @param  \Illuminate\Http\Request  $request
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
     * @param  \App\Models\JobFunction  $jobFunction
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
     * @param  \App\Models\JobFunction  $jobFunction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobfunction = JobFunction::find($id);
        return view('jobsfunction.editar',compact('jobfunction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobFunction  $jobFunction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobFunction  $jobFunction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JobFunction::find($id)->delete();
        return redirect()->route('jobsfunction.index');
    }
}
