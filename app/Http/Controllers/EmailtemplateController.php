<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emailtemplate;

class EmailtemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emailtemplates = Emailtemplate::all();
        return view('layout.template',['emailtemplates'=>$emailtemplates, 'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emailtemplates = Emailtemplate::all();
        return view('layout.template');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emailtemplate = new Emailtemplate() ;
        $emailtemplate->templateName = $request->input('templateName') ;
        $emailtemplate->templateBody = $request->input('templateBody') ;
        $emailtemplate->save() ;
        return redirect('/emailtemplate/') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emailtemplate = Emailtemplate::find($id);
        $emailtemplates = Emailtemplate::all();
        return view('layout.template',['emailtemplate'=>$emailtemplate, 'layout'=> 'show', 'emailtemplates'=>$emailtemplates]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emailtemplate = Emailtemplate::find($id);
        return view('layout.template',['emailtemplate'=>$emailtemplate,'layout'=>'edit']);
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
        $emailtemplate = Emailtemplate::find($id);
        $emailtemplate->templateName = $request->input('templateName') ;
        $emailtemplate->templateBody = $request->input('templateBody') ;
        $emailtemplate->save() ;
        return redirect('/emailtemplate/') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emailtemplate = Emailtemplate::find($id);
        $emailtemplate->delete();
        return redirect('/emailtemplate/') ;
    }
}
