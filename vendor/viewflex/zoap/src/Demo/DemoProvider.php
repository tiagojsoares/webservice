<?php

namespace Viewflex\Zoap\Demo;

use Viewflex\Zoap\Demo\Types\Funcionarios;
use Viewflex\Zoap\Demo\Types\Product;

use function Psy\debug;

/**
 * Methods used by Demo service class.
 */
class DemoProvider
{

    /**
     * Returns array of products by search criteria.
     *
     * @param array $criteria
     * @return array
     */
    public static function ObterFuncionarios($criteria = [])
    {
        $dados = ($criteria);
        $count = count($criteria);
        $array = array();
        for ($i = 0; $i < $count; $i++) {
            array_push($array, array(
                new Funcionarios(
                    $i,
                    $dados[$i]['ObjectID'],
                    $dados[$i]['Name'],
                    $dados[$i]['Description'],
                    $dados[$i]['LastModifiedTime'],
                    $dados[$i]['LastName'],
                    $dados[$i]['FirstName'],
                    $dados[$i]['MiddleName'],
                    $dados[$i]['PersonnelTypeID'],
                    $dados[$i]['PersonDisabled'],
                    $dados[$i]['Text1'],
                    $dados[$i]['Text2'],
                    $dados[$i]['Text3'],
                    $dados[$i]['Text4'],
                    $dados[$i]['Text5'],
                    $dados[$i]['Text6'],
                    $dados[$i]['Text7'],
                    $dados[$i]['Text8'],
                    $dados[$i]['Text9'],
                    $dados[$i]['Text10'],
                    $dados[$i]['Text11'],
                    $dados[$i]['Text12'],
                    $dados[$i]['Text13'],
                    $dados[$i]['Text14'],
                    $dados[$i]['Text15'],
                    $dados[$i]['Text16'],
                    $dados[$i]['Text17'],
                    $dados[$i]['Text18'],
                    $dados[$i]['Text19'],
                    $dados[$i]['Text20'],
                    $dados[$i]['Text21'],
                    $dados[$i]['Text22'],
                    $dados[$i]['Text23'],
                    $dados[$i]['Text24'],
                    $dados[$i]['Text25'],
                    $dados[$i]['Int1'],
                    $dados[$i]['Int2'],
                    $dados[$i]['Int3'],
                    $dados[$i]['Int4'],
                    $dados[$i]['Int5'],
                    $dados[$i]['Int6'],
                    $dados[$i]['Int7'],
                    $dados[$i]['Int8'],
                    $dados[$i]['Int9'],
                    $dados[$i]['Logical1'],
                    $dados[$i]['Logical2'],
                    $dados[$i]['Logical3'],
                    $dados[$i]['Logical4'],
                    $dados[$i]['Date1'],
                    $dados[$i]['Date2'],
                    $dados[$i]['Date3'],
                    $dados[$i]['Date4'],
                    $dados[$i]['CardNumber'],
                    $dados[$i]['CardInt1'],
                    $dados[$i]['CardInt2'],
                    $dados[$i]['CardInt3'],
                    $dados[$i]['CardInt4'],
                    $dados[$i]['AccessType'],
                    $dados[$i]['Active'],
                    $dados[$i]['Expired'],
                    $dados[$i]['ActivationDateTime'],
                    $dados[$i]['ExpirationDateTime'],
                    $dados[$i]['CardDisabled'],
                    $dados[$i]['Lost'],
                    $dados[$i]['Stolen'],
                    $dados[$i]['PersonnelId'],
                    $dados[$i]['Nivel'],

                )
            ));
        }


        $index = $array[0];
        for ($i=1; $i < count($array); $i++) {
            $dados = array_merge($index, $array[$i]);
        }


            return $dados;
    }
}
