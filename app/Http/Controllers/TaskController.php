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

        return redirect('/books');
    }
}
