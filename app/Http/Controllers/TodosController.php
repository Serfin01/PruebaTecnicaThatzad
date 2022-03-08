<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    //public function store(Request $request){
        /*
    public function __invoke(Request $request){
        $request->validate([
            'title' => 'required|min:3'
        ]);
        $todo = new Todo;
        $todo->title= $request->title;
        $todo->save();

        return redirect()->route('time')->with('success', 'Tarea creada correctamente');
    }
*/
}
