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
     *@param string $FirstName,
     *@param string $MiddleName,
     *@param string $LastName,
     *@param string $PersonnelType,
     *@param string $Text1,
     *@param string $Text2,
     *@param string $Text3,
     *@param string $Text4,
     *@param string $Text5,
     *@param string $Text6,
     *@param string $Text7,
     *@param string $Text8,
     *@param string $Text9,
     *@param string $Text10,
     *@param string $Text11,
     *@param string $Text12,
     *@param string $Text13,
     *@param string $Text14,
     *@param string $Text15,
     *@param string $Text16,
     *@param string $Text17,
     *@param string $Text18,
     *@param string $Text19,
     *@param string $Text20,
     *@param string $Text21,
     *@param string $Text22,
     *@param string $Text23,
     *@param string $Text24,
     *@param string $Text25,
     *@param string $Disabled
     *@return bool

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
        $Disabled

    ) {
        try {

            $date = date("Y/m/d H:i:s", strtotime("+0 seconds"));
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
                'Disabled' => $Disabled
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

            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
    /*
    |--------------------------------------------------------------------------
    | Public Methods
    |--------------------------------------------------------------------------
    */
    /**
     *
     *@param string $Token
     *@param string $FirstName,
     *@param string $MiddleName,
     *@param string $LastName,
     *@param string $PersonnelType,
     *@param string $Text1,
     *@param string $Text2,
     *@param string $Text3,
     *@param string $Text4,
     *@param string $Text5,
     *@param string $Text6,
     *@param string $Text7,
     *@param string $Text8,
     *@param string $Text9,
     *@param string $Text10,
     *@param string $Text11,
     *@param string $Text12,
     *@param string $Text13,
     *@param string $Text14,
     *@param string $Text15,
     *@param string $Text16,
     *@param string $Text17,
     *@param string $Text18,
     *@param string $Text19,
     *@param string $Text20,
     *@param string $Text21,
     *@param string $Text22,
     *@param string $Text23,
     *@param string $Text24,
     *@param string $Text25,
     *@param string $Disabled
     *@return bool

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
        $Disabled

    ) {
        try {

            $date = date("Y/m/d H:i:s", strtotime("+0 seconds"));
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
                'Disabled' => $Disabled
            ]);

            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    /**
     * Returns boolean authentication result using given token or user/password.
     *
     * @param string $token
     * @param string $Text1
     * @return \Viewflex\Zoap\Demo\Types\Product[]
     */

    public function ObterUsuario($token, $Text1)
    {
        $dados =  (HomeController::ObterFuncionarios('1234', $Text1));

        return Provider::ObterFuncionarios($dados);



        //return Provider::authenticate($token, $user, $password);
    }

    /*
    |--------------------------------------------------------------------------
    | Public Methods
    |--------------------------------------------------------------------------
    */
    /**
     *
     *@param string $Token
     *@param string $PersonnelType,
     *@param string $Nivel,
     *@param string $Text1,
     *@param string $Text3,
     *@return bool

     */

    public function IncluindoAlterandoNivel(
        $Token,
        $PersonnelType,
        $Nivel,
        $Text1,
        $Text3

    ) {
        try {

            $date = date("Y/m/d H:i:s", strtotime("+0 seconds"));
            DB::table('ACVSCore.dbo.perso_Cred')->where('Text1', '=',  $Text1)->delete();


            DB::table('ACVSCore.dbo.perso_Cred')->insert(
                [
                    'Time_Stamp' => $date,
                    'Clearance_name' => "$Nivel",
                    'Text3' => $Text3,
                    'Text1' => $Text1
                ]

            );


            DB::table('ACVSCore.dbo.personnelWeb')
                ->where('Text1', '=', $Text1)
                ->update([
                    'Time_Stamp' => $date,
                    'PersonnelType' => $PersonnelType

                ]);

            return true;
        } catch (\Throwable $th) {
            return false;
        }
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
     *@return bool

     */

    public function DeletandoNivel(
        $Token,
        $Text1,
        $Text3

    ) {
        try {

            $date = date("Y/m/d H:i:s", strtotime("+0 seconds"));
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


            return true;
        } catch (\Throwable $th) {
            return false;
        }
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
     *@return bool

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
        try {

            $date = date("Y/m/d H:i:s", strtotime("+0 seconds"));
            $years = date("Y/m/d H:i:s", strtotime("+5 years"));
            DB::table('ACVSCore.dbo.perso_Card')->where('CardNumber', '=',  $CardNumber)->delete();

            if ($ativation === '') {
                $ativation = $date;
            }
            if ($expiration === '') {
                $expiration = $years;
            }
            DB::table('ACVSCore.dbo.perso_Card')->insert(
                [
                    'Time_Stamp' => $date,
                    'CardNumber' => $CardNumber,
                    'Disabled' => "$Disabled",
                    'Lost' => "$Lost",
                    'Stolen' => "$Stolen",
                    'ativation' => "$ativation",
                    'expiration' => "$expiration",
                    'Text3' => $Text3,
                    'Text1' => $Text1
                ]

            );




            return true;
        } catch (\Throwable $th) {
            return false;
        }
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
     *@return bool

     */

    public function DeletandoCartao(
        $Token,
        $CardNumber,
        $Text1,
        $Text3

    ) {
        try {

            $date = date("Y/m/d H:i:s", strtotime("+0 seconds"));

            DB::table('ACVSCore.dbo.perso_Card')->where('CardNumber', '=',  $CardNumber)->delete();


            DB::table('ACVSCore.dbo.perso_Card')->insert(
                [
                    'Time_Stamp' => $date,
                    'CardNumber' => $CardNumber,
                    'Text3' => $Text3,
                    'Text1' => $Text1
                ]

            );




            return true;
        } catch (\Throwable $th) {
            return false;
        }
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
