<?php

namespace App\Http\Controllers;

use App\Issue;
use App\Http\Requests\IssueRequest;
use Illuminate\Support\Facades\Auth;

class IssueController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $issues = Issue::paginate(10);
        return view('issue.index')->with('issues', $issues);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('issue.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\IssueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IssueRequest $request)
    {
        $request->merge(['created_by_user_id' => Auth::user()->id]);
        Issue::create($request->all());

        return redirect()->route('issue.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $issue  = Issue::find($id);

        return view('issue.show')->with('issue', $issue);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $issue  = Issue::find($id);

        return view('issue.edit')->with('issue', $issue);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\IssueRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IssueRequest $request, $id)
    {
        $issue = Issue::find($id);

        $issue->update($request->all());

        return redirect()->route('issue.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Issue::destroy($id);

        return redirect()->route('issue.index');
    }
}
