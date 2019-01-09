<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\SiteConfig;
use App\Referral;
use App\Menu;
use Validator;

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

    public function manageMenu()
    {
        $title = "Manage Menu";
        $menus = Menu::whereNull('parent')->paginate(10);
        return view('admin.managemenu.index', compact('title','menus'));
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
        $dshare_target = $this->getConfigValue('TOTAL_DSHARE_TARGET');
        $dshare_sold = $this->getConfigValue('TOTAL_DSHARE_SOLD');


        return view('admin.config', compact(
                                            'title',
                                            'site_title',
                                            'contact_email',
                                            'contact_address',
                                            'contact_phone_number',
                                            'eth_address',
                                            'dshare_target',
                                            'dshare_sold'
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

    public function manageMenuShow($id)
    {
        $menu = Menu::find($id);
        $title = "Detail Menu";
        return view('admin.managemenu.show', compact('menu', 'title'));
    }

    public function updateMenu($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'text' => 'required',
            'active_menu' => 'required',
            'link' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErorrs($validator);
        } else {
            Menu::find($id)->update([
                'text' => $request->text,
                'active_menu' => $request->active_menu,
                'link' => $request->link
            ]);

            return redirect()->back()->with('msg', 'Update success');
        }

    }

    public function createSubMenu($parent_id)
    {
        $title = "Add Sub Menu";
        $menu = Menu::find($parent_id);
        return view('admin.managemenu.create_submenu', compact('title','menu'));
    }

    public function storeSubMenu($parent_id, Request $request)
    {
        $validator = Validator::make($request->all(),[
            'text' => 'required',
            'active_menu' => 'required',
            'link' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            Menu::create([
                'text' => $request->text,
                'active' => $request->active_menu,
                'link' => $request->link,
                'level' => 2,
                'parent' => $parent_id
            ]);
            return redirect()->route('admin.managemenu.show', $parent_id)->with('msg', 'Success Add');
        }

    }

    public function createMenu()
    {
        $title = "Add new menu";
        return view('admin.managemenu.create', compact('title'));
    }

    public function storeMenu(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'text' => 'required',
            'active_menu' => 'required',
            'link' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            Menu::create([
                'text' => $request->text,
                'active' => $request->active_menu,
                'link' => $request->link,
                'level' => 1
            ]);

            return redirect()->route('admin.managemenu')->with('msg', 'Success Add new menu');
        }
    }

    public function destroySubMenu($parent_id, $submenu_id, Request $request)
    {
        Menu::find($submenu_id)->delete();
        return redirect()->route('admin.managemenu.show', $parent_id)->with('msg', 'success remove sub menu');
    }

    public function destroyMenu($id, Request $request)
    {
        Menu::find($id)->delete();
        return redirect()->back()->with('msg', 'success remove menu');
    }

    public function bountyIndex()
    {

        $title = "Bounty List";

        $referrals = Referral::paginate(10);

        return view('admin.bounty.index', compact('title','referrals'));
    }


    // protected method
    protected function getConfigValue($key)
    {
        $config_value = SiteConfig::where('key', strtoupper($key))->first()->value;

        return $config_value;
    }
}
