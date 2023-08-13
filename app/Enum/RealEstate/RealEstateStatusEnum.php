<?php

namespace App\Enum\RealEstate;

enum RealEstateStatusEnum :int
{
    case STATUS_SOLD = 1;
    case STATUS_FOR_SALE = 2;
    case STATUS_FOR_RENT = 3;

}
