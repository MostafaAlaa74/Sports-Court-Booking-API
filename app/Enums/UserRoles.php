<?php

namespace App\Enums;

enum UserRoles : string
{
    case ADMIN = 'admin';
    case FIELD_OWNER = 'field_owner';
    case PLAYER = 'player';
}
