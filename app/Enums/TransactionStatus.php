<?php

namespace App\Enums;

// Na criação do enum, preciso usar int para retornar os valores
enum TransactionStatus: int{
    case PAID = 1;
    case PENDING = 2;
    case FAILED = 3;
    case CANCELLED = 0;
}   