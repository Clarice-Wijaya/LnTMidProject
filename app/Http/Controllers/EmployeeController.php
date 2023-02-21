<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class EmployeeController extends Controller
{
    public function add(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5|max:20',
            'umur' => 'required|integer|min:21',
            'alamat' => 'required|min:10|max:40',
            'notelp' => 'required|min:9|max:12|regex:(08)'
        ],
        [
            'nama'=>'5-20 karakter',
            'umur'=>'lebih besar dari 20 tahun',
            'alamat'=>'10-40 karakter',
            'notelp'=>'9-12 karakter, dimulai dari 08'
        ]
        );

        Employee::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp
        ]);
        return redirect(route('employee'));
    }


    public function show()
    {
        $employees = Employee::all();
        return view('employee', ['employees'=>$employees]);
    }

    public function viewAddEmployee()
    {
        return view('addemployee');
    }

    public function updateview($id)
    {
        $employee = Employee::find($id);
        return view('updateemployee',['employee'=>$employee]);
    }


    public function updatedata(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|min:5|max:20',
            'umur' => 'required|integer|min:21',
            'alamat' => 'required|min:10|max:40',
            'notelp' => 'required|min:9|max:12|regex:(08)'
        ],
        [
            'nama'=>'5-20 karakter',
            'umur'=>'lebih besar dari 20 tahun',
            'alamat'=>'10-40 karakter',
            'notelp'=>'9-12 karakter, dimulai dari 08'
        ]
        ); 

        $employee = Employee::find($id);
        $employee->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp
        ]);

        return redirect(route('employee'));
    }

    public function deleteemployee($id){
        $employee = Employee::find($id);
        $employee->delete();

        return redirect(route('employee'));
    }
}
