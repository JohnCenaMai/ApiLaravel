<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Truyencuoi;

class ApiController extends Controller
{
    //
    public function create(Request $request)
    {
        $students = new Truyencuoi();
        $students->mt = $request->input('mt');
        $students->service = $request->input('service');
        $students->is_sent = $request->input('is_sent');
        $students->timeCreated = $request->input('timeCreated');

        $students->save();
        return response()->json($students);
    }

    public function show()
    {
        $students = Truyencuoi::all();
        return response()->json($students);
    }

    public function showbyid($id)
    {
        $students = Truyencuoi::find($id);
        return response()->json($students);
    }

    public function updatebyid(Request $request, $id)
    {
        $students = Truyencuoi::find($id);
        $students->mt = $request->input('mt');
        $students->service = $request->input('service');
        $students->is_sent = $request->input('is_sent');
        $students->timeCreated = $request->input('timeCreated');

        $students->save();
        return response()->json($students);
    }

    public function deletebyid(Request $request,$id)
    {
        $students = Truyencuoi::find($id);
        $students->delete();
        return response()->json($students);
    }

}
