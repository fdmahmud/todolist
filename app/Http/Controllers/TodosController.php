<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todolist;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //return 123;
            //$todos = Todolist::all();

        $todos = Todolist::orderBy('created_at', 'desc')->get(); //Resent goes on top
            //var_dump($todos);
        return view('todos.index')->with('todos', $todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return 'suvmitted';
        $this->validate($request, [
          'text' => 'required'
        ]);

        // Create Todo
        $todos = new Todolist;
        $todos->text = $request->input('text');
        $todos->body = $request->input('body');
        $todos->due = $request->input('due');

        $todos->save();

        return redirect('/')->with('success', 'Todo Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = Todolist::find($id);
        return view('todos.show')->with('todo',$todo);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $todo = Todolist::find($id); 
        return view('todos.edit')->with('todo', $todo);

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
        //return 'update';
        $todos = Todolist::find($id);   // it finds with the in number
        // $todos = new Todolist;
        $todos->text = $request->input('text');
        $todos->body = $request->input('body');
        $todos->due = $request->input('due');

        $todos->save();

        return redirect('/')->with('success', 'Todo Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //return 234;

        $todo = Todolist::find($id);

        $todo->delete();
        return redirect('/')->with('success', 'Todo Delated');

    }
}
