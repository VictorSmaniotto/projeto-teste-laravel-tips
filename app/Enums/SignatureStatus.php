<?php

namespace App\Enums;

// Na criação do enum, preciso usar int para retornar os valores
enum SignatureStatus: int{
    case ACTIVE = 1;
    case INACTIVE = 2;
    case SUSPENDED = 3;
    case CANCELLED = 4;
}