<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'meeting_id' => 'required',
            'user_id' => 'required'
        ]);
        $meeting_id = $request->input("meeting_id");
        $user_id = $request->input("user_id");

        $meeting = [
            'title' => 'Title',
            'description' => 'Description',
            'time' => 'Time',
            'view_meeting' => [
                'href' => 'api/v1/meeting/1',
                'method' => 'GET'
            ]
        ];
        return response()->json($meeting, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "It works";
    }
}
