<?php

namespace projectFour\Http\Controllers;

use projectFour\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller {

    /**
    * Responds to requests to GET /tasks
    */
    public function getIndex() {
        return view('tasks.tasks');
    }

    /**
    * Responds to requests to GET /tasks/create
    */
    public function getCreate() {
        return view('tasks.create');
    }

    /**
    * Responds to requests to POST /tasks/create
    */
    public function postCreate(Request $request) {

        return redirect('/tasks');
    }

    /**
    * Responds to requests to GET /task/edit/{id?}
    */
    public function getEdit($id) {

        return view('tasks.edit');

    }


    /**
    * Responds to requests to POST /task/edit/{id?}
    */
    public function postEdit(Request $request) {

        \Session::flash('message','Your changes were saved.');
        return redirect('/task/edit/'.$request->id);

    }
}
