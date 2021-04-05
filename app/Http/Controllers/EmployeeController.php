<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    public function index(){
        return view('form');
    }
    public function store(Request $request){
        $adam = new Employee();
        $adam-> name = $request-> input('name');
        $adam-> surname = $request-> input('surname');
        $adam-> email = $request-> input('email');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/employee/', $filename);
            $adam->image = $filename;
        } else {
            return $request;  
            $adam->image = '';
        }
        $adam->save();
        return view('form')->with('form', $adam);
    }
}
