<?php

namespace App\Http\Controllers;

use App\Models\JobFunction;
use App\Models\Post;
use Illuminate\Http\Request;

//agregamos lo siguiente
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use DataTables;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('role',function($row){
                    if(!empty($row->getRoleNames()))
                    {
                        foreach ($row->getRoleNames() as $v) {
                            return '<label class="badge badge-success text-dark">' . $v . '</label>';
                        }
                    }
                    return '';
                })
                ->addColumn('action', function($row){
                    $btn = [];

                    //$btn[] = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';

                    $btn[] = '<a class="btn btn-info" href="'.route('usuarios.show',$row->id).'">Detalle</a>';
                    $btn[] = '<a class="btn btn-primary" href="'.route('usuarios.edit',$row->id).'">Actualizar</a>';

                    /*
                     * {!! Form::open(['method' => 'DELETE','route' => ['usuarios.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                     * */

                    return join('', $btn);
                })
                ->rawColumns(['role','action'])
                ->make(true);
        }
        return view('usuarios.index', [
            //'permissions' => $permissions
        ]);
        //return view('usuarios.index',compact('usuarios'));

        //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $usuarios->links() !!}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //aqui trabajamos con name de las tablas de users
        $roles = Role::pluck('name','name')->all();
        $posts = Post::pluck('name','name')->all();
        $jobsfunction = JobFunction::pluck('name','name')->all();
        return view('usuarios.crear',compact('roles','posts','jobsfunction'));
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
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $input['role']=$request->input('roles');
        $input['post']=$request->input('posts');
        $input['function']=$request->input('jobsfunction');

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('usuarios.index');
    }

    public function storePerfil(Request $request)
    {
        // SIEMPRE valida tus datos
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            //'photo' => ['image', 'max:2000'],
            'photo' => 'nullable|image',
            //'photo' => 'nullable|sometimes|image|mimes:jpeg,bmp,png,jpg,svg|max:2000',
            //'photo' =>  'file|mimes:jpg,jpeg,png,gif|max:1024',
            'email' => 'required',
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('usuarios.show',compact('user','roles','userRole'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        $posts = Post::pluck('name','name')->all();
        $jobsfunction = JobFunction::pluck('name','name')->all();
        return view('usuarios.editar',compact('user','roles','posts','userRole','jobsfunction'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('usuarios.index');
    }
}
