<?php

namespace FwAuthSystem\Role;

use controller\Contractors;
use FwAuthSystem\Utils\AuthRole;

if (!class_exists('FwAuthSystem\Role\AgenciesRole')) {
    class AgenciesRole extends AuthRole
    {
        public static function accessList(): array
        {
            // list of available controllers for this role
            return [
                
            ];
        }

        public static function roleName(): string
        {
            // role main names
            return 'نمایندگی';
        }
    }
}