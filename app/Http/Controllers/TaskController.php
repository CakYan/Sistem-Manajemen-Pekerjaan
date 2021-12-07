<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        $request->validate([
            'nama_task' => 'required'
        ]);

        // $proyek_id = Proyek::where('id', $id);

        $query = Task::insert([
            'nama_task' => $request->input('nama_task'),
            'kelas_id' => '1',
            'proyek_id' => $id,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        if ($query) {
            return back();
        }
    }

    public function add_progres(Request $request, $id){

        $request->validate([
            'nama_task' => 'required'
        ]);

        $query = Task::insert([
            'nama_task' => $request->input('nama_task'),
            'kelas_id' => '2',
            'proyek_id' => $id,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        if ($query) {
            return back();
        }
    }

    public function add_selesai(Request $request, $id){

        $request->validate([
            'nama_task' => 'required'
        ]);

        $query = Task::insert([
            'nama_task' => $request->input('nama_task'),
            'kelas_id' => '3',
            'proyek_id' => $id,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        if ($query) {
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $request -> validate([
            'kelas_id' => 'required'
        ]);

        $task = Task::where('id', $request->input('id'))->update([
            'kelas_id' => $request->input('kelas_id')
        ]);

        if ($task) {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Task::where('id', $id)->delete();
        return back();
    }
}