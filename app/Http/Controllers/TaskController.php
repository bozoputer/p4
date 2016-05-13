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
    * Responds to requests to GET /task/create
    */
    public function getCreate() {

        $list_status = \Auth::user()->list_status;

        if ($list_status == 1) {

            return view('tasks.create');

        } else {

            return redirect('/list/create');
        }
    }

    /**
    * Responds to requests to POST /task/create
    */
    public function postCreate(Request $request) {

        $this->validate($request,[
            'task' => 'required|max:255',
        ]);

        # Mass Assignment
        $data = $request->only('task');

        #Add the data
        $task = new \projectFour\Task($data);
        $task->save();

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
