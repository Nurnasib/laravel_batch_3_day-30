<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Session;

class SubjectController extends Controller
{
    private $subject;
    private $subjects;
    public function index()
    {
        return view('teacher.subject.add');
    }
    public function create(Request $request)
    {
        Subject::newSubject($request);
        return redirect()->back()->with('message', 'Subject Info Created Successfully');
    }
    public function manage()
    {
        $this->subjects = Subject::where('teacher_id', Session::get('user_id'))->get();
        return view('teacher.subject.manage', ['courses'=>$this->subjects]);
    }

}
