<?php

namespace projectFour\Http\Controllers;

use projectFour\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListController extends Controller {

    /**
    * Responds to requests to GET /list/create
    */
    public function getCreate() {

        return view('lists.create');

    }

    /**
    * Responds to requests to POST /list/create
    */
    public function postCreate(Request $request) {

        #Validate user's list name
        $this->validate($request,[
            'list_name' => 'required|max:20',
        ]);

        #Mass Assignment
        $data = $request->only('list_name');
        $data['user_id'] = \Auth::id();

        #Create new list
        $listname = new \projectFour\Tasklist($data);

        $listname->save();

        #Set user's list status to 1 (i.e., user has a list)
        $id = \Auth::user()->id;

        \DB::table('users')
            ->where('id', $id)
            ->update(['list_status' => 1]);

        $request->session()->flash('message', 'Congratulations! You created a list!');

        return redirect('/task/create');

    }

}
