<?php
/**
 * Created by PhpStorm.
 * User: dinh0
 * Date: 6/1/2018
 * Time: 4:42 PM
 */

namespace App\Http\Controllers\Frontend\API;


use App\Http\Controllers\Controller;
use App\Models\Auth\User;

class GetComponentsViewController extends Controller
{
    public function getRegisterFormView($typeRegister) {
        if ($typeRegister == User::TENANT_TYPE || $typeRegister == User::LANDLORD_TYPE) {
            return view('frontend.includes.components.register-tenant-landlord-form')->render();
        }
        if ($typeRegister == User::AGENCY_TYPE) {
            return view('frontend.includes.components.register-agency-form')->render();
        }
        return response(['mgs' => 'Has not type user'], 500);
    }
}