<?php

namespace Viewflex\Zoap\Demo\Types;


class Funcionarios
{
  /**
     * @var int
     */
    public $id = 1;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $Description;

    /**
     * @var string
     */
    public $LastModifiedTime;

    /**
     * @var string
     */
    public $LastName;

    /**
     * @var string
     */
    public $FirstName;

    /**
     * @var string
     */
    public $MiddleName;

    /**
     * @var string
     */
    public $PersonnelTypeID;

    /**
     * @var string
     */
    public $Disabled;

    /**
     * @var string
     */
    public $Text1;

    /**
     * @var string
     */
    public $Text2;

    /**
     * @var string
     */
    public $Text3;

    /**
     * @var string
     */
    public $Text4;

    /**
     * @var string
     */
    public $Text5;

    /**
     * @var string
     */
    public $Text6;

    /**
     * @var string
     */
    public $Text7;

    /**
     * @var string
     */
    public $Text8;

    /**
     * @var string
     */
    public $Text9;

    /**
     * @var string
     */
    public $Text10;

    /**
     * @var string
     */
    public $Text11;

    /**
     * @var string
     */
    public $Text12;

    /**
     * @var string
     */
    public $Text13;

    /**
     * @var string
     */
    public $Text14;

    /**
     * @var string
     */
    public $Text15;

    /**
     * @var string
     */
    public $Text16;

    /**
     * @var string
     */
    public $Text17;

    /**
     * @var string
     */
    public $Text18;

    /**
     * @var string
     */
    public $Text19;

    /**
     * @var string
     */
    public $Text20;

    /**
     * @var string
     */
    public $Text21;


    /**
     * @var string
     */
    public $Text22;


    /**
     * @var string
     */
    public $Text23;


    /**
     * @var string
     */
    public $Text24;


    /**
     * @var string
     */
    public $Int1;


    /**
     * @var string
     */
    public $Int2;


    /**
     * @var string
     */
    public $Int3;



    /**
     * @var string
     */
    public $Int4;


    /**
     * @var string
     */
    public $Int5;


    /**
     * @var string
     */
    public $Int6;


    /**
     * @var string
     */
    public $Int7;


    /**
     * @var string
     */
    public $Int8;


    /**
     * @var string
     */
    public $Logical1;


    /**
     * @var string
     */
    public $Logical2;

    /**
     * @var string
     */
    public $Logical3;

    /**
     * @var string
     */
    public $Logical4;

    /**
     * @var string
     */
    public $Int9;

    /**
     * @var string
     */
    public $Date1;

    /**
     * @var string
     */
    public $Date2;


    /**
     * @var string
     */
    public $Date3;

    /**
     * @var string
     */
    public $Date4;

    /**
     * @var string
     */
    public $CardNumber;
    /**
     * @var string
     */
    public $CardInt1;
    /**
     * @var string
     */
    public $CardInt2;
    /**
     * @var string
     */
    public $CardInt3;
    /**
     * @var string
     */
    public $CardInt4;

    /**
     * @var string
     */
    public $AccessType;

    /**
     * @var string
     */
    public $Active;


    /**
     * @var string
     */
    public $Expired;
    /**
     * @var string
     */
    public $ActivationDateTime;
    /**
     * @var string
     */
    public $ExpirationDateTime;
    /**
     * @var string
     */
    public $Stolen;
    /**
     * @var string
     */
    public $PersonnelId;



    /**
     * Funcionarios constructor.
     *@param int $id
     *@param string $name
     *@param string $Description
     *@param string $LastModifiedTime
     *@param string $LastName
     *@param string $FirstName
     *@param string $MiddleName
     *@param string $PersonnelTypeID
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
     *@param string $Int1
     *@param string $Int2
     *@param string $Int3
     *@param string $Int4
     *@param string $Int5
     *@param string $Int6
     *@param string $Int7
     *@param string $Int8
     *@param string $Int9
     *@param string $Logical1
     *@param string $Logical2
     *@param string $Logical3
     *@param string $Logical4
     *@param string $Date1
     *@param string $Date2
     *@param string $Date3
     *@param string $Date4
     *@param string $CardNumber
     *@param string $CardInt1
     *@param string $CardInt2
     *@param string $CardInt3
     *@param string $CardInt4
     *@param string $AccessType
     *@param string $Active
     *@param string $Expired
     *@param string $ActivationDateTime
     *@param string $ExpirationDateTime
     *@param string $Disabled
     *@param string $Lost
     *@param string $Stolen
     *@param string $PersonnelId
     */

    public function __construct(
        $id,
        $name,
        $Description,
        $LastModifiedTime,
        $LastName,
        $FirstName,
        $MiddleName,
        $PersonnelTypeID,
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
        $Date4,
        $CardNumber,
        $CardInt1,
        $CardInt2,
        $CardInt3,
        $CardInt4,
        $AccessType,
        $Active,
        $Expired,
        $ActivationDateTime,
        $ExpirationDateTime,
        $Disabled,
        $Lost,
        $Stolen,
        $PersonnelId
    ) {

        $this->name = $name;
        $this->Description = $Description;
        $this->LastModifiedTime = $LastModifiedTime;
        $this->LastName = $LastName;
        $this->FirstName = $FirstName;
        $this->MiddleName = $MiddleName;
        $this->PersonnelTypeID = $PersonnelTypeID;
        $this->Disabled = $Disabled;
        $this->Text1 = $Text1;
        $this->Text2 = $Text2;
        $this->Text3 = $Text3;
        $this->Text4 = $Text4;
        $this->Text5 = $Text5;
        $this->Text6 = $Text6;
        $this->Text7 = $Text7;
        $this->Text8 = $Text8;
        $this->Text9 = $Text9;
        $this->Text10 = $Text10;
        $this->Text11 = $Text11;
        $this->Text12 = $Text12;
        $this->Text13 = $Text13;
        $this->Text14 = $Text14;
        $this->Text15 = $Text15;
        $this->Text16 = $Text16;
        $this->Text17 = $Text17;
        $this->Text18 = $Text18;
        $this->Text19 = $Text19;
        $this->Text20 = $Text20;
        $this->Text21 = $Text21;
        $this->Text22 = $Text22;
        $this->Text23 = $Text23;
        $this->Text24 = $Text24;
        $this->Text25 = $Text25;
        $this->Int1 = $Int1;
        $this->Int2 = $Int2;
        $this->Int3 = $Int3;
        $this->Int4 = $Int4;
        $this->Int5 = $Int5;
        $this->Int6 = $Int6;
        $this->Int7 = $Int7;
        $this->Int8 = $Int8;
        $this->Int9 = $Int9;
        $this->Logical1 = $Logical1;
        $this->Logical2 = $Logical2;
        $this->Logical3 = $Logical3;
        $this->Logical4 = $Logical4;
        $this->Date1 = $Date1;
        $this->Date2 = $Date2;
        $this->Date3 = $Date3;
        $this->Date4 = $Date4;
        $this->CardNumber = $CardNumber;
        $this->CardInt1 = $CardInt1;
        $this->CardInt2 = $CardInt2;
        $this->CardInt3 = $CardInt3;
        $this->CardInt4 = $CardInt4;
        $this->AccessType = $AccessType;
        $this->Active = $Active;
        $this->Expired = $Expired;
        $this->ActivationDateTime = $ActivationDateTime;
        $this->ExpirationDateTime = $ExpirationDateTime;
        $this->Disabled = $Disabled;
        $this->Lost = $Lost;
        $this->Stolen = $Stolen;
        $this->PersonnelId = $PersonnelId;
    }
}
