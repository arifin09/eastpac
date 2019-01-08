<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\SiteConfig;
use Validator;
use App\WhitePaper;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdministratorController extends Controller
{

    public function manageUser()
    {
        $title = 'Manage User';
        $users =  User::paginate(20);

        return view('admin.manageuser.index', compact('title', 'users'));
    }

    public function manageUserShow($id)
    {
        $title = "Detail user";
        $user = User::find($id);
        return view('admin.manageuser.show', compact('title','user'));
    }

    // user role

    public function addRoleTo($id, Request $request)
    {
        //hasRole

        $validate = Validator::make($request->all(), [
            'role_id' => 'required'
        ]);

        if(is_null(Role::find($request->role_id))) {
            $result = [
                'msg' => 'Role not found !'
            ];

            $status = 500;

            return response()->json($result, $status);
        }

        if($validate->fails()) {
            $result = [
                'msg' => 'Failed give Role'
            ];

            $status = 500;
        } else {
            if(User::find($id)->hasRole(Role::find($request->role_id)->id)) {
                $result = [
                    'msg' => 'Role allready use '.str_replace('-', ' ', Role::find($request->role_id)->name)
                ];

                $status = 500;
            } else {
                User::find($id)->assignRole(Role::find($request->role_id)->name);

                $result = [
                    'msg' => 'Success give role'
                ];

                $status = 200;
            }
        }

        return response()->json($result, $status);
    }

    public function removeRole($id, $role_name)
    {
        $user = User::find($id);
        if(is_null($user)) {
            $result = 'Failed remove role';

            $status = 500;
        } else {
            $user->removeRole($role_name);

            $result = 'Success remove role';

            $status = 200;
        }

        return redirect()->back()->with('msg', $result);
    }

    // user permission

    public function addPermissionTo($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'permission_id' => 'required'
        ]);

        if(is_null(Permission::find($request->permission_id))) {
            $result = [
                'msg' => 'Permission not found !'
            ];

            $status = 500;

            return response()->json($result, $status);
        }

        if($validator->fails()) {

            $result = [
                'msg' => 'Failed give permission'
            ];

            $status = 500;

        } else {
            if(User::find($id)->hasPermissionTo(Permission::find($request->permission_id)->id)) {
                $result = [
                    'msg' => 'Permission allready use '.str_replace('-', ' ', Permission::find($request->permission_id)->name)
                ];

                $status = 500;
            } else {
                User::find($id)->givePermissionTo(Permission::find($request->permission_id)->name);
                $result = [
                    'msg' => 'Success give permission'
                ];

                $status = 200;
            }


        }

        return response()->json($result, $status);
    }

    public function removePermission($id, $permission_name)
    {
        $user = User::find($id);
        if(is_null($user)) {
            $result = 'Failed remove permission';

            $status = 500;
        } else {
            $user->revokePermissionTo($permission_name);

            $result = 'Success remove permission';

            $status = 200;
        }

        return redirect()->back()->with('msg', $result);
    }

    // site config

    public function configIndex()
    {
        $title = "Site Config";

        $site_title = $this->getConfigValue('SITE_TITLE');
        $contact_email = $this->getConfigValue('CONTACT_EMAIL');
        $contact_address = $this->getConfigValue('CONTACT_ADDRESS');
        $contact_phone_number = $this->getConfigValue('CONTACT_PHONE_NUMBER');
        $eth_address = $this->getConfigValue('ETHEREUM_ADDRESS');


        return view('admin.config', compact(
                                            'title',
                                            'site_title',
                                            'contact_email',
                                            'contact_address',
                                            'contact_phone_number',
                                            'eth_address'
                                        ));
    }

    public function updateConfigValue(Request $request)
    {
        // dd($request->all());
        $search_key = str_replace('-', '_', $request->key);
        $validator = Validator::make($request->all(), [
            'key' => 'required',
            'val' => 'required'
        ]);

        if($validator->fails()) {
            $result = [
                'msg' => 'Save Config Failed'
            ];

            $status = 500;
        } else {
            SiteConfig::where('key', strtoupper($search_key))->update(
                [
                    'value' => $request->val
                ]
            );

            $result = [
                'msg' => 'Save Config Success'
            ];

            $status = 500;
        }

        return response()->json($result);

    }

    protected function getConfigValue($key)
    {
        $config_value = SiteConfig::where('key', strtoupper($key))->first()->value;

        return $config_value;
    }
}
