<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Thought;
use DataTables;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Service::get();
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
        return view('services.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');
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
            'photo' => 'nullable|image|dimensions:min_width=1280,min_height=800|max:5000',
            'title' => 'required',
            'text' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $service = Service::create([
            'title' => $request->input('title'),
            'text' => $request->input('text'),
        ]);

        $filename=null;
        if ($request->file('photo')!=null)
        {
            $filename = $request->file('photo')->store('/', 'services');
            $service->update([
                'photo'=>$filename
            ]);

        }

        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @return void
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $service = Service::find($id);

        return view('services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'photo' => 'nullable|image|dimensions:min_width=1280,min_height=800|max:5000',
            'title' => 'required',
            'text' => 'required',
            'service' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $service = Service::find($request->input('service'));
        $service->title = $request->input('title');
        $service->text = $request->input('text');

        $filename=null;
        if ($request->file('photo')!=null)
        {
            $filename = $request->file('photo')->store('/', 'services');
            $service->photo=$filename;
        }

        $service->save();

        return response()->json(
            [
                'success'=>'Informacion correctamente actualizada',
                'title'=>$service->title,
                'text'=>$service->text,
                'identity' =>$service->id,
                'photo' =>Storage::disk('services')->url($filename),
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        Service::find($id)->delete();
        return redirect()->route('services.index');
    }
}
