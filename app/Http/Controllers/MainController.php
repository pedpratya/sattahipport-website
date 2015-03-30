<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller {


	/**
	 * Create the Organization.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('module-list');
	}

	public function getMasterTop()
	{
		return view('layout.master-top');
	}

		public function getFullscreen()
	{
		return view('layout.fullscreen');
	}

	public function getModuleList()
	{
		return view('module-list');
	}

	public function getMasterModule()
	{
		return view('master-module');
	}
        
    /**
    * Check user login.
    *
    * @param  Request  $request
    * @return Response
    */
	public function signIn(Request $request)
	{
            $username = $request->input('username');
            $password = $request->input('password');
            
            if(is_null($username || $password)) {
                $error = true ;
                return view('home', compact('error'));
            }
            
            $arr = array('user1','user2');
            if(in_array($username, $arr)){
                
                $modules = self::moduleList();
		return view('customer.index', compact('modules'));
                
              }
              else{
                $error = true ;
                return view('home', compact('error'));
              }

	}

	public function moduleList()
	{
		$menu = [
                            ['module' => ['name' => 'ระบบ Admin',                            'images' => 'images/icon-mainmenu/icon-admin.png',          'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบข้อมูลสารสน<p>เทศ</p>',               'images' => 'images/icon-mainmenu/icon-information.png',    'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบบริหารการท่า<p>และระบบอนุมัติ</p>',       'images' => 'images/icon-mainmenu/icon-manager.png',        'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบบริหารจัดการ<p>ลูกค้า CRM</p>',          'images' => 'images/icon-mainmenu/icon-crm.png',            'url' => '../public/admin/home']]

			];
            return $menu;
	}

}
