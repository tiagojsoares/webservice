<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function ObterFuncionarios($token)
    {

        return DB::table('ACVSCore.Access.Personnel as p')
        ->select(
            'p.ObjectID'
            ,'p.Name'
            ,'p.Description'
            ,'p.LastModifiedTime'
            ,'p.LastName'
            ,'p.FirstName'
            ,'p.MiddleName'
            ,'p.PersonnelTypeID'
            ,'p.Disabled'
            ,'p.Text1'
            ,'p.Text2'
            ,'p.Text3'
            ,'p.Text4'
            ,'p.Text5'
            ,'p.Text6'
            ,'p.Text7'
            ,'p.Text8'
            ,'p.Text9'
            ,'p.Text10'
            ,'p.Text11'
            ,'p.Text12'
            ,'p.Text13'
            ,'p.Text14'
            ,'p.Text15'
            ,'p.Text16'
            ,'p.Text17'
            ,'p.Text18'
            ,'p.Text19'
            ,'p.Text20'
            ,'p.Text21'
            ,'p.Text22'
            ,'p.Text23'
            ,'p.Text24'
            ,'p.Text25'
            ,'p.Int1'
            ,'p.Int2'
            ,'p.Int3'
            ,'p.Int4'
            ,'p.Int5'
            ,'p.Int6'
            ,'p.Int7'
            ,'p.Int8'
            ,'p.Int9'
            ,'p.Logical1'
            ,'p.Logical2'
            ,'p.Logical3'
            ,'p.Logical4'
            ,'p.Date1'
            ,'p.Date2'
            ,'p.Date3'
            ,'p.Date4'
            )->join('Access.Credential as c','c.PersonnelId','=','p.ObjectID')
        ->get();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
