<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DropzoneController extends Controller
{
    public function index()
    {
        return view('dropzone');
    }

    /**
     * Image Upload Code
     *
     * @return void
     */
    public function store(Request $request)
    {
//        $image = $request->file('file');
//
//        $imageName = time().'.'.$image->extension();
//        $image->move(public_path('images'),$imageName);
        dd($request->file('file'));
        $property = DB::table('re_properties')->orderBy('id', 'DESC')->first();
        foreach ($request->file('file') as $image) {
                $image = $image->store('image', 'public');
        }
        dd($image);
dd($image);
        return response()->json(['success'=>$imageName]);
    }
}
