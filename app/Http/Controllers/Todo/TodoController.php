<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'todos' => Todo::all()
        ];
        return view('todo.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'task' => 'required|min:3'
            ],
            [
                'task.required' => 'Task wajib di isi',
                'task.min' => 'Task minimal 3 karakter'
            ]
        );

        Todo::create([
            'task' => $request->input('task')
        ]);
        
        return redirect()->route('todo')->with('succes', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'task' => 'required|min:3'
            ],
            [
                'task.required' => 'Task wajib di isi',
                'task.min' => 'Task minimal 3 karakter'
            ]
        );

        todo::where('id', $id)->update([
            'task' => $request->input('task'),
            'is_done' => $request->input('is_done')
        ]);
        return redirect()->route('todo')->with('succes', 'Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
