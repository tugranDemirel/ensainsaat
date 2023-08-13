<?php

namespace App\Enum\RealEstate;

enum RealEstateTypeEnum : int
{
    case TYPE_APARTMENT = 1;
    case TYPE_VILLA = 2;
    case TYPE_RESIDENCE = 3;
    case TYPE_DUBLEX = 4;
    case TYPE_PENTHOUSE = 5;
    case TYPE_STUDIO = 6;
    case TYPE_HOUSE = 7;
}
