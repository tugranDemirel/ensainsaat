<?php

namespace App\Enum\RealEstate;

enum RealEstateGeneralEnum : int
{
    case STATUS_SOLD = 1;
    case STATUS_FOR_SALE = 2;
    case STATUS_FOR_RENT = 3;

    case TYPE_APARTMENT = 1;
    case TYPE_VILLA = 2;
    case TYPE_RESIDENCE = 3;
    case TYPE_DUBLEX = 4;
    case TYPE_PENTHOUSE = 5;
    case TYPE_STUDIO = 6;
    case TYPE_HOUSE = 7;

    case PURPOSE_RENT = 1;
    case PURPOSE_SALE = 2;

    case IS_PASSIVE = 0;
    case IS_ACTIVE = 1;
}
