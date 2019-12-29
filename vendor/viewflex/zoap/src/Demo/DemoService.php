<?php

namespace Viewflex\Zoap\Demo;

use App\Http\Controllers\HomeController;
use SoapFault;
use Viewflex\Zoap\Demo\DemoProvider as Provider;
use Illuminate\Support\Facades\DB;



/**
 * An example of a class that is used as a SOAP gateway to application functions.
 */
class DemoService
{


    /*
    |--------------------------------------------------------------------------
    | Public Methods
    |--------------------------------------------------------------------------
    */
    /**
     *
     *@param string $Token
     *@param string $FirstName
     *@param string $MiddleName
     *@param string $LastName
     *@param string $PersonnelType
     *@param string $Text1
     *@param string $Text2
     *@param string $Text3
     *@param string $Text4
     *@param string $Text5
     *@param string $Text6
     *@param string $Text7
     *@param string $Text8
     *@param string $Text9
     *@param string $Text10
     *@param string $Text11
     *@param string $Text12
     *@param string $Text13
     *@param string $Text14
     *@param string $Text15
     *@param string $Text16
     *@param string $Text17
     *@param string $Text18
     *@param string $Text19
     *@param string $Text20
     *@param string $Text21
     *@param string $Text22
     *@param string $Text23
     *@param string $Text24
     *@param string $Text25
     *@param string $Disabled
     *@param string Int1
     *@param string Int2
     *@param string Int3
     *@param string Int4
     *@param string Int5
     *@param string Int6
     *@param string Int7
     *@param string Int8
     *@param string Int9
     *@param string Logical1
     *@param string Logical2
     *@param string Logical3
     *@param string Logical4
     *@param string Date1
     *@param string Date2
     *@param string Date3
     *@param string Date4



     *@return string

     */

    public function AlterarFuncionario(
        $Token,
        $FirstName,
        $MiddleName,
        $LastName,
        $PersonnelType,
        $Text1,
        $Text2,
        $Text3,
        $Text4,
        $Text5,
        $Text6,
        $Text7,
        $Text8,
        $Text9,
        $Text10,
        $Text11,
        $Text12,
        $Text13,
        $Text14,
        $Text15,
        $Text16,
        $Text17,
        $Text18,
        $Text19,
        $Text20,
        $Text21,
        $Text22,
        $Text23,
        $Text24,
        $Text25,
        $Disabled,
        $Int1,
        $Int2,
        $Int3,
        $Int4,
        $Int5,
        $Int6,
        $Int7,
        $Int8,
        $Int9,
        $Logical1,
        $Logical2,
        $Logical3,
        $Logical4,
        $Date1,
        $Date2,
        $Date3,
        $Date4

    ) {
        $result = '';
        $key = md5('P@ssw0rd123');
        if ($key != $Token) {
            $result = 'Token Invalido';
        } else {
            try {

                $date = date("Y-m-d H:i:s", strtotime("+0 seconds"));
                $Date15 = date("Y/m/d H:i:s", strtotime("+60 seconds"));
                DB::table('ACVSCore.dbo.personnelWeb')->where('Text1', '=',  $Text1)->delete();

                DB::table('ACVSCore.dbo.personnelWeb')->insert([
                    'Time_Stamp' => $date,
                    'First_Name' => $FirstName,
                    'MiddleName' => $MiddleName,
                    'Last_Name' => $LastName,
                    'PersonnelType' => $PersonnelType,
                    'Text25' => $Text25,
                    'Text24' => $Text24,
                    'Text23' => $Text23,
                    'Text22' => $Text22,
                    'Text21' => $Text21,
                    'Text20' => $Text20,
                    'Text19' => $Text19,
                    'Text18' => $Text18,
                    'Text17' => $Text17,
                    'Text16' => $Text16,
                    'Text15' => $Text15,
                    'Text14' => $Text14,
                    'Text13' => $Text13,
                    'Text12' => $Text12,
                    'Text11' => $Text11,
                    'Text10' => $Text10,
                    'Text9' => $Text9,
                    'Text8' => $Text8,
                    'Text7' => $Text7,
                    'Text6' => $Text6,
                    'Text5' => $Text5,
                    'Text4' => $Text4,
                    'Text3' => $Text3,
                    'Text2' => $Text2,
                    'Text1' => $Text1,
                    'Disabled' => $Disabled,
                    'Int1' => $Int1,
                    'Int2' => $Int2,
                    'Int3' => $Int3,
                    'Int4' => $Int4,
                    'Int5' => $Int5,
                    'Int6' => $Int6,
                    'Int7' => $Int7,
                    'Int8' => $Int8,
                    'Int9' => $Int9,
                    'Logical1' => $Logical1,
                    'Logical2' => $Logical2,
                    'Logical3' => $Logical3,
                    'Logical4' => $Logical4,
                    'Date1' => $Date1,
                    'Date2' => $Date2,
                    'Date3' => $Date3,
                    'Date4' => $Date4
                ]);

                /*DB::table('ACVSCore.dbo.perso_Cred')->where('Text1', '=',  $Text1)->delete();
                DB::table('ACVSCore.dbo.perso_Cred')->updateOrInsert(
                    [
                        'Time_Stamp' => $Date15,
                        'Clearance_name' => "$PersonnelType",
                        'Text3' => $Text3,
                        'Text1' => $Text1
                    ]

                );
                */

                $result = 'true';
            } catch (\Throwable $th) {
                $result = 'Erro ! Verifique se o Usuario ja esta cadastrado';
                $result = $th;
            }
        }
        return $result;
    }

    /*
    |--------------------------------------------------------------------------
    | Public Methods
    |--------------------------------------------------------------------------
    */
    /**
     *
     *@param string $Token
     *@param string $FirstName
     *@param string $MiddleName
     *@param string $LastName
     *@param string $PersonnelType
     *@param string $Text1
     *@param string $Text2
     *@param string $Text3
     *@param string $Text4
     *@param string $Text5
     *@param string $Text6
     *@param string $Text7
     *@param string $Text8
     *@param string $Text9
     *@param string $Text10
     *@param string $Text11
     *@param string $Text12
     *@param string $Text13
     *@param string $Text14
     *@param string $Text15
     *@param string $Text16
     *@param string $Text17
     *@param string $Text18
     *@param string $Text19
     *@param string $Text20
     *@param string $Text21
     *@param string $Text22
     *@param string $Text23
     *@param string $Text24
     *@param string $Text25
     *@param string $Disabled
     *@param string Int1
     *@param string Int2
     *@param string Int3
     *@param string Int4
     *@param string Int5
     *@param string Int6
     *@param string Int7
     *@param string Int8
     *@param string Int9
     *@param string Logical1
     *@param string Logical2
     *@param string Logical3
     *@param string Logical4
     *@param string Date1
     *@param string Date2
     *@param string Date3
     *@param string Date4



     *@return string

     */

    public function InserirFuncionario(
        $Token,
        $FirstName,
        $MiddleName,
        $LastName,
        $PersonnelType,
        $Text1,
        $Text2,
        $Text3,
        $Text4,
        $Text5,
        $Text6,
        $Text7,
        $Text8,
        $Text9,
        $Text10,
        $Text11,
        $Text12,
        $Text13,
        $Text14,
        $Text15,
        $Text16,
        $Text17,
        $Text18,
        $Text19,
        $Text20,
        $Text21,
        $Text22,
        $Text23,
        $Text24,
        $Text25,
        $Disabled,
        $Int1,
        $Int2,
        $Int3,
        $Int4,
        $Int5,
        $Int6,
        $Int7,
        $Int8,
        $Int9,
        $Logical1,
        $Logical2,
        $Logical3,
        $Logical4,
        $Date1,
        $Date2,
        $Date3,
        $Date4

    ) {
        $result = '';
        $key = md5('P@ssw0rd123');
        if ($key != $Token) {
            $result = 'Token Invalido';
        } else {
            try {

                $date = date("Y-m-d H:i:s", strtotime("+0 seconds"));
                $Date15 = date("Y/m/d H:i:s", strtotime("+60 seconds"));
                DB::table('ACVSCore.dbo.personnelWeb')->where('Text1', '=',  $Text1)->delete();

                DB::table('ACVSCore.dbo.personnelWeb')->insert([
                    'Time_Stamp' => $date,
                    'First_Name' => $FirstName,
                    'MiddleName' => $MiddleName,
                    'Last_Name' => $LastName,
                    'PersonnelType' => $PersonnelType,
                    'Text25' => $Text25,
                    'Text24' => $Text24,
                    'Text23' => $Text23,
                    'Text22' => $Text22,
                    'Text21' => $Text21,
                    'Text20' => $Text20,
                    'Text19' => $Text19,
                    'Text18' => $Text18,
                    'Text17' => $Text17,
                    'Text16' => $Text16,
                    'Text15' => $Text15,
                    'Text14' => $Text14,
                    'Text13' => $Text13,
                    'Text12' => $Text12,
                    'Text11' => $Text11,
                    'Text10' => $Text10,
                    'Text9' => $Text9,
                    'Text8' => $Text8,
                    'Text7' => $Text7,
                    'Text6' => $Text6,
                    'Text5' => $Text5,
                    'Text4' => $Text4,
                    'Text3' => $Text3,
                    'Text2' => $Text2,
                    'Text1' => $Text1,
                    'Disabled' => $Disabled,
                    'Int1' => $Int1,
                    'Int2' => $Int2,
                    'Int3' => $Int3,
                    'Int4' => $Int4,
                    'Int5' => $Int5,
                    'Int6' => $Int6,
                    'Int7' => $Int7,
                    'Int8' => $Int8,
                    'Int9' => $Int9,
                    'Logical1' => $Logical1,
                    'Logical2' => $Logical2,
                    'Logical3' => $Logical3,
                    'Logical4' => $Logical4,
                    'Date1' => $Date1,
                    'Date2' => $Date2,
                    'Date3' => $Date3,
                    'Date4' => $Date4
                ]);

                /*DB::table('ACVSCore.dbo.perso_Cred')->where('Text1', '=',  $Text1)->delete();
                DB::table('ACVSCore.dbo.perso_Cred')->updateOrInsert(
                    [
                        'Time_Stamp' => $Date15,
                        'Clearance_name' => "$PersonnelType",
                        'Text3' => $Text3,
                        'Text1' => $Text1
                    ]

                );
                */

                $result = 'true';
            } catch (\Throwable $th) {
                $result = 'Erro ! Verifique se o Usuario ja esta cadastrado';
                $result = $th;
            }
        }
        return $result;
    }
   
    /*
    |--------------------------------------------------------------------------
    | Public Methods
    |--------------------------------------------------------------------------
    */
    /**
     *
     *@param string $Token

     *@param string $Nivel,
     *@param string $Text1,
     *@param string $Text3,
     *@return string

     */

    public function IncluindoAlterandoNivel(
        $Token,

        $Nivel,
        $Text1,
        $Text3

    ) {
        $result = '';
        $key = md5('P@ssw0rd123');
        if ($key != $Token) {
            $result = 'Token Invalido';
        } else {


            try {

                $date = date("Y-m-d H:i:s", strtotime("+0 seconds"));
                DB::table('ACVSCore.dbo.perso_Cred')->where('Text1', '=',  $Text1)->delete();


                DB::table('ACVSCore.dbo.perso_Cred')->insert(
                    [
                        'Time_Stamp' => $date,
                        'Clearance_name' => "$Nivel",
                        'Text3' => $Text3,
                        'Text1' => $Text1,
                       //'PersonnelType'=>$PersonnelType
                    ]

                );
                /*

                DB::table('ACVSCore.dbo.personnelWeb')
                    ->where('Text1', '=', $Text1)
                    ->update([
                        'Time_Stamp' => $date,
                        'PersonnelType' => $PersonnelType

                    ]);
/*/
                $result = 'true';
            } catch (\Throwable $th) {
                $result = $th;
            }
        }
        return $result;
    }

    /*
    |--------------------------------------------------------------------------
    | Public Methods
    |--------------------------------------------------------------------------
    */
    /**
     *
     *@param string $Token
     *@param string $Text1,
     *@param string $Text3,
     *@return string

     */

    public function DeletandoNivel(
        $Token,
        $Text1,
        $Text3

    ) {
        $result = '';
        $key = md5('P@ssw0rd123');
        if ($key != $Token) {
            $result = 'Token Invalido';
        } else {


            try {

                $date = date("Y-m-d H:i:s", strtotime("+0 seconds"));
                DB::table('ACVSCore.dbo.perso_Cred')->where('Text1', '=',  $Text1)->delete();


                DB::table('ACVSCore.dbo.perso_Cred')->insert(
                    [
                        'Time_Stamp' => $date,
                        'Clearance_name' => "",
                        'Text3' => $Text3,
                        'Text1' => $Text1,
                        //'Card_Import'=>'Delete'
                    ]

                );


                $result = 'true';
            } catch (\Throwable $th) {
                $result = $th;
            }
        }
        return $result;
    }
    /*
    |--------------------------------------------------------------------------
    | Public Methods
    |--------------------------------------------------------------------------
    */
    /**
     *
     *@param string $Token
     *@param string $CardNumber
     *@param string $Disabled
     *@param string $Lost
     *@param string $Stolen
     *@param string $ativation
     *@param string $expiration
     *@param string $Text1
     *@param string $Text3
     *@return string

     */

    public function IncluindoAlterandoCartao(
        $Token,
        $CardNumber,
        $Disabled,
        $Lost,
        $Stolen,
        $ativation,
        $expiration,
        $Text1,
        $Text3

    ) {
        $result = '';
        $key = md5('P@ssw0rd123');
        if ($key != $Token) {
            $result = 'Token Invalido';
        } else {
            try {

                $date = date("Y-m-d H:i:s", strtotime("+0 seconds"));
                $years = date("Y/m/d H:i:s", strtotime("+5 years"));
                DB::table('ACVSCore.dbo.personnelWeb')->where('Text1', '=',  $Text1)->delete();
                DB::table('ACVSCore.dbo.perso_Card')->where('CardNumber', '=',  $CardNumber)->delete();

                if ($ativation === '') {
                    $ativation = $date;
                }
                if ($expiration === '') {
                    $expiration = $years;
                }
                DB::table('ACVSCore.dbo.personnelWeb')->insert(
                    [
                        'Time_Stamp' => $date,
                        'Text1' => "$Text1",
                        'Text3' => "$Text3"
                    ]

                );

                DB::table('ACVSCore.dbo.perso_Card')->insert(
                    [
                        'Time_Stamp' => $date,
                        'CardNumber' => $CardNumber,
                        'Disabled' => "$Disabled",
                        'Lost' => "$Lost",
                        'Stolen' => "$Stolen",
                        'ativation' => "$ativation",
                        'expiration' => "$expiration",
                        'Text3' => "$Text3",
                        'Text1' => "$Text1"
                    ]

                );




                $result = 'true';
            } catch (\Throwable $th) {
                $result =  $th;
            }
        }
        return $result;
    }
    /*
    |--------------------------------------------------------------------------
    | Public Methods
    |--------------------------------------------------------------------------
    */
    /**
     *
     *@param string $Token
     *@param string $CardNumber
     *@param string $Text1
     *@param string $Text3
     *@return string

     */

    public function DeletandoCartao(
        $Token,
        $CardNumber,
        $Text1,
        $Text3

    ) {
        $result = '';
        $key = md5('P@ssw0rd123');
        if ($key != $Token) {
            $result = 'Token Invalido';
        } else {
            try {


                $date = date("Y-m-d H:i:s", strtotime("+0 seconds"));


                DB::table('ACVSCore.dbo.perso_Card')->where('CardNumber', '=',  $CardNumber)->delete();
                /*DB::table('ACVSCore.dbo.personnelWeb')->where('Text1', '=',  $Text1)->delete();

                DB::table('ACVSCore.dbo.personnelWeb')->insert(
                    [
                        'Time_Stamp' => $date,
                        'Text1' => "$Text1",
                        'Text3' => "$Text3"
                    ]

                );

*/
                DB::table('ACVSCore.dbo.perso_Card')->insert(
                    [
                        'Time_Stamp' => $date,
                        'CardNumber' => $CardNumber,
                        'Text3' => $Text3,
                        'Text1' => $Text1,
                        'Card_import' => 'Delete'

                    ]

                );




                $result = 'true';
            } catch (\Throwable $th) {
                $result = $th;;
            }
        }
        return $result;
    }

    /*
    |--------------------------------------------------------------------------
    | Public Methods
    |--------------------------------------------------------------------------
    */
    /**
     *
     *@param string $Token
     *@param string $Text1
     *@param string $Text3
     *@return string

     */

    public function DeletarFuncionario(
        $Token,
        $Text1,
        $Text3

    ) {
        $result = '';
        $key = md5('P@ssw0rd123');
        if ($key != $Token) {
            $result = 'Token Invalido';
        } else {
            try {


                $date = date("Y-m-d H:i:s", strtotime("+0 seconds"));


                DB::table('ACVSCore.dbo.personnelWeb')->where('Text1', '=',  $Text1)->delete();

                DB::table('ACVSCore.dbo.personnelWeb')->insert(
                    [
                        'Time_Stamp' => $date,
                        'Text1' => "$Text1",
                        'Text3' => "$Text3",
                        'PER_import' => 'Delete'
                    ]

                );





                $result = 'true';
            } catch (\Throwable $th) {
                $result = $th;;
            }
        }
        return $result;
    }



    /*
    |--------------------------------------------------------------------------
    | Utility
    |--------------------------------------------------------------------------
    */

    /**
     * Convert array of KeyValue objects to associative array, non-recursively.
     *
     * @param \Viewflex\Zoap\Demo\Types\KeyValue[] $objects
     * @return array
     */
    protected static function arrayOfKeyValueToArray($objects)
    {
        $return = array();
        foreach ($objects as $object) {
            $return[$object->key] = $object->value;
        }

        return $return;
    }
}
