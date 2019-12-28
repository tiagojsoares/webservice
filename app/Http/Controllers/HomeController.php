<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Viewflex\Zoap\Demo\DemoProvider as Provider;
use Viewflex\Zoap\Demo\Types\Funcionarios;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return $key = md5('P@ssw0rd123');
        $timestamp = date('Y-m-d h:i:s');
        $date = date("Y/m/d H:i:s", strtotime("+30 seconds"));

        return $dados = HomeController::ObterFuncionarios('1234', '46357120');
        for ($i = 0; $i < count($dados); $i++) {
            $text1 =  $dados[$i]['Text1'];
            DB::table('ACVSCore.dbo.perso_Cred')->where('Text1', '=',  $text1)->delete();
            DB::table('ACVSCore.dbo.perso_Card')->where('Text1', '=',  $text1)->delete();
            DB::table('ACVSCore.dbo.personnelWeb')->where('Text1', '=',  $text1)->delete();

            DB::table('ACVSCore.dbo.personnelWeb')->updateOrInsert(
                [

                    'Time_Stamp' =>  $timestamp,
                    'First_Name' => $dados[$i]['FirstName'],
                    'MiddleName' => $dados[$i]['MiddleName'],
                    'Last_Name' => $dados[$i]['LastName'],
                    'PersonnelType' => $dados[$i]['PersonnelTypeID'],
                    'Text25' => $dados[$i]['Text25'],
                    'Text24' => $dados[$i]['Text24'],
                    'Text23' => $dados[$i]['Text23'],
                    'Text22' => $dados[$i]['Text22'],
                    'Text21' => $dados[$i]['Text21'],
                    'Text20' => $dados[$i]['Text20'],
                    'Text19' => $dados[$i]['Text19'],
                    'Text18' => $dados[$i]['Text18'],
                    'Text17' => $dados[$i]['Text17'],
                    'Text16' => $dados[$i]['Text16'],
                    'Text15' => $dados[$i]['Text15'],
                    'Text14' => $dados[$i]['Text14'],
                    'Text13' => $dados[$i]['Text13'],
                    'Text12' => $dados[$i]['Text12'],
                    'Text11' => $dados[$i]['Text11'],
                    'Text10' => $dados[$i]['Text10'],
                    'Text9' => $dados[$i]['Text9'],
                    'Text8' => $dados[$i]['Text8'],
                    'Text7' => $dados[$i]['Text7'],
                    'Text6' => $dados[$i]['Text6'],
                    'Text5' => $dados[$i]['Text5'],
                    'Text4' => $dados[$i]['Text4'],
                    'Text3' => $dados[$i]['Text3'],
                    'Text2' => $dados[$i]['Text2'],
                    'Disabled' => $dados[$i]['Disabled']

                ],
                ['Text1' => $dados[$i]['Text1']]
            );



            DB::table('ACVSCore.dbo.perso_Card')->updateOrInsert(
                [
                    'Time_Stamp' => $date,
                    'CardNumber' => $dados[$i]['CardNumber'],
                    'Text3' => $dados[$i]['Text3'],
                    'Text1' => $dados[$i]['Text1'],
                    //'Card_import' => $dados[$i]['Card_import'],
                    //'CHUIDFormatKey' => $dados[$i]['CHUIDFormatKey'],
                    'Disabled' => $dados[$i]['Disabled'],
                    'Lost' => $dados[$i]['Lost'],
                    'Stolen' => $dados[$i]['Stolen'],
                    'AccessType' => $dados[$i]['AccessType']
                    //'expiration' => $dados[$i]['expiration'],
                    //'ativation' => $dados[$i]['ativation']
                ],
                [
                    'CardNumber' => $dados[$i]['CardNumber']
                ]
            );
            $PersonnelTypeID = json_decode(DB::table('ACVSCore.Access.PersonnelType')->where('ObjectID', '=', $dados[$i]['PersonnelTypeID'])->select('Name')->get(), true);

            DB::table('ACVSCore.dbo.perso_Cred')->updateOrInsert([
                'Time_Stamp' => $date,
                'Clearance_name' => $PersonnelTypeID[0]['Name'],
                'Text1' => $dados[$i]['Text1'],
                'Text3' => $dados[$i]['Text3']
            ]);

            DB::table('ACVSCore.dbo.perso_Card')->where('Text1', $dados[$i]['Text1'])->update([
                'Time_Stamp' =>  $timestamp
            ]);
            DB::table('ACVSCore.dbo.personnelWeb')->where('Text1', $dados[$i]['Text1'])->update([
                'Time_Stamp' =>  $timestamp
            ]);
            DB::table('ACVSCore.dbo.perso_Cred')->where('Text1', $dados[$i]['Text1'])->update([
                'Time_Stamp' =>  $timestamp
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*
        if (count($dados) > 1) {
            return Provider::ObterFuncionarios($dados);
        } else {
            return Provider::ObterFuncionarios($dados);
        }/*/
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
    public function ObterFuncionarios($token, $text1)
    {

        $dados = json_decode(DB::table('ACVSCore.Access.Personnel as p')
            ->select(
                'p.ObjectID',
                'p.Name',
                'p.Description',
                'p.LastModifiedTime',
                'p.LastName',
                'p.FirstName',
                'p.MiddleName',
                'p.PersonnelTypeID',
                'p.Disabled as PersonDisabled',
                'p.Text1',
                'p.Text2',
                'p.Text3',
                'p.Text4',
                'p.Text5',
                'p.Text6',
                'p.Text7',
                'p.Text8',
                'p.Text9',
                'p.Text10',
                'p.Text11',
                'p.Text12',
                'p.Text13',
                'p.Text14',
                'p.Text15',
                'p.Text16',
                'p.Text17',
                'p.Text18',
                'p.Text19',
                'p.Text20',
                'p.Text21',
                'p.Text22',
                'p.Text23',
                'p.Text24',
                'p.Text25',
                'p.Int1',
                'p.Int2',
                'p.Int3',
                'p.Int4',
                'p.Int5',
                'p.Int6',
                'p.Int7',
                'p.Int8',
                'p.Int9',
                'p.Logical1',
                'p.Logical2',
                'p.Logical3',
                'p.Logical4',
                'p.Date1',
                'p.Date2',
                'p.Date3',
                'p.Date4',
                'c.CardNumber',
                'c.CardInt1',
                'c.CardInt2',
                'c.CardInt3',
                'c.CardInt4',
                'c.AccessType',
                'c.Active',
                'c.Expired',
                'c.ActivationDateTime',
                'c.ExpirationDateTime',
                'c.Disabled as CardDisabled',
                'c.Lost',
                'c.Stolen',
                'c.PersonnelId',
                'cl.Name as Nivel'

            )->join('Access.Credential as c', 'c.PersonnelId', '=', 'p.ObjectID')->where('Text1', '=', $text1)->where('Text3', '=', 'PEPSICO')
            ->join('Access.PersonnelClearancePair AS pc','pc.PersonnelID','=','p.ObjectID')
            ->join('Access.Clearance as cl','cl.ObjectID','=','pc.ClearanceID')
            ->get(), true);

        $count = count($dados);
        if ($count === 0) {
            $dados = json_decode(DB::table('ACVSCore.Access.Personnel as p')
                ->select(
                    'p.ObjectID',
                    'p.Name',
                    'p.Description',
                    'p.LastModifiedTime',
                    'p.LastName',
                    'p.FirstName',
                    'p.MiddleName',
                    'p.PersonnelTypeID',
                    'p.Disabled',
                    'p.Text1',
                    'p.Text2',
                    'p.Text3',
                    'p.Text4',
                    'p.Text5',
                    'p.Text6',
                    'p.Text7',
                    'p.Text8',
                    'p.Text9',
                    'p.Text10',
                    'p.Text11',
                    'p.Text12',
                    'p.Text13',
                    'p.Text14',
                    'p.Text15',
                    'p.Text16',
                    'p.Text17',
                    'p.Text18',
                    'p.Text19',
                    'p.Text20',
                    'p.Text21',
                    'p.Text22',
                    'p.Text23',
                    'p.Text24',
                    'p.Text25',
                    'p.Int1',
                    'p.Int2',
                    'p.Int3',
                    'p.Int4',
                    'p.Int5',
                    'p.Int6',
                    'p.Int7',
                    'p.Int8',
                    'p.Int9',
                    'p.Logical1',
                    'p.Logical2',
                    'p.Logical3',
                    'p.Logical4',
                    'p.Date1',
                    'p.Date2',
                    'p.Date3',
                    'p.Date4'

                )->where('Text1', '=', $text1)->where('p.Text3', '=', 'PEPSICO')
                ->get(), true);

            return ($dados);
        } else {
            return ($dados);
        }
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
