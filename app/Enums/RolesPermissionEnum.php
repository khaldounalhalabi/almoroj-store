<?php

namespace App\Enums;

/**
 * Class RolesPermissionEnum
 */
class RolesPermissionEnum
{
    
    //**********ADMIN***********//
    const ADMIN = [
    	'role' => 'admin' , 
    	'permissions' => [] ,
    ] ;
    //*************************//




    const ALLROLES = [
        self::ADMIN['role'], 
 //add-all-your-enums-roles-here 

    ];

    const ALL = [
        self::ADMIN, 
 //add-all-your-enums-here 

    ];
}