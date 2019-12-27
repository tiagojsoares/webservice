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
     * Returns boolean status flag for given user and password.
     *
     * @param string $user
     * @param string $password
     * @return bool
     */
    public static function validateUser($user, $password)
    {

        return (($user == config('zoap.mock.user')) && ($password == config('zoap.mock.password'))) ? true : false;
    }

    /**
     * Returns token for given user.
     *
     * @param string $user
     * @return string
     */
    public static function getToken($user)
    {
        return ($user == config('zoap.mock.user')) ? config('zoap.mock.token') : '';
    }

    /**
     * Returns boolean status flag for given token string.
     *
     * @param string $token
     * @return bool
     */
    public static function validateToken($token)
    {
        return ($token == config('zoap.mock.token'));
    }

    /**
     * Returns true if a user exists with given token or user and password.
     *
     * @param string $token
     * @param string $user
     * @param string $password
     * @return bool
     */
    public static function authenticate($token = '', $user = '', $password = '')
    {
        $result = false;

        if ($token) {
            $result = self::validateToken($token);
        } elseif ($user && $password) {
            $result = self::validateUser($user, $password);
        }

        return $result;
    }

    /**
     * Returns product by id.
     *
     * @param int $productId
     * @return \Viewflex\Zoap\Demo\Types\Product
     */
    public static function findProduct($productId)
    {
        //return new Product(456, 'North Face Summit Ski Jacket', 'Outerwear', 'Women', 249.98);
    }

    /**
     * Returns array of products by search criteria.
     *
     * @param array $criteria
     * @return \Viewflex\Zoap\Demo\Types\Product[]
     */
    public static function findProductsBy($criteria = [])
    {
        return array(
            //new Product(456, 'North Face Summit Ski Jacket', 'Outerwear', 'Women', 249.98),
            //new Product(789, 'Marmot Crew Neck Base Layer', 'Outerwear', 'Men', 95.29)
        );
    }

    /**
     * Returns array of products by search criteria.
     *
     * @param array $criteria
     * @return \Viewflex\Zoap\Demo\Types\Product[]
     */
    public static function ObterFuncionarios($criteria = [])
    {
        $dados = ($criteria);
        $count = count($criteria);
        $array = array();
        for ($i = 0; $i < $count; $i++) {
            array_push($array, array(
                new Product(
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
