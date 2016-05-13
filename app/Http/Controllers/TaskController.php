<?php

namespace projectFour\Http\Controllers;

use projectFour\Http\Controllers\Controller;
use projectFour\ListController;
use Illuminate\Http\Request;

class TaskController extends Controller {

    /**
    * Responds to requests to GET /tasks
    */
    public function getIndex() {

        #$tasks = Task::all();

        $id = \Auth::user()->id;

        $allTasks = \DB::table('tasks')
            ->where('list_id', $id)
            ->get();


#dd($allTasks);
        return view('tasks.tasks')->with('tasks', $allTasks);
    }

    /**
    * Responds to requests to GET /task/create
    */
    public function getCreate() {

        # Check to see if user has a list
        $list_status = \Auth::user()->list_status;

        # If user has list create task; if not create list
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
            'task' => 'required|max:50',
        ]);

        # Mass Assignment
        $data = $request->only('task');
        $data['list_id'] = \Auth::user()->id;

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
