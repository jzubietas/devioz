<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function settingStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'keyUsTitle' => 'required',
            'valueUsTitle' => 'required',
            'keyUsText' => 'required',
            'valueUsText' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        setting()->load();
        //$user->profile_picture = $filename;
        //$user->save();
        setting([$request->keyUsTitle => ($request->valueUsTitle)])->save();
        setting([$request->keyUsText => ($request->valueUsText)])->save();

        return response()->json(
            [
                'success'=>'Informacion actualizada correctamente',
                'keyUsTitle'=>$request->keyUsTitle,
                'valueUsTitle' =>$request->valueUsTitle,
                'keyUsText'=>$request->keyUsText,
                'valueUsText' =>$request->valueUsText,
            ]);
        //return setting()->all();
    }
}
