<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller {
       
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
            return view('home.index');

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

    public function getPage($id)
    {
            $manu = self::getLeftManu($id);
            return view('page', compact('manu'));
    }
 
    public function getLeftManu($id)
    {

        switch ($id) {
            case '004':
                $manu = [ 'mainManu' => 'บริการ ทพส.ทร.',
                          'leftManu' => [
                                            [
                                                'id' =>'00401', 'name' =>'อัตราค่าสัมภาระ' ,'url' => 'customer/rental-space'
                                            ],[
                                                'id' =>'00402', 'name' =>'สิ่งอำนวยความสะดวก' ,'url' => '#'
                                            ],[
                                                'id' =>'00403', 'name' =>'พื้นที่วางสินค้า' ,'url' => '#'
                                            ],[
                                                'id' =>'00404', 'name' =>'พื้นที่เช่าเพื่อประกอบกิจการ' ,'url' => '#'
                                            ],[
                                                'id' =>'00405', 'name' =>'สถิติ' ,'url' => '#'
                                            ],[
                                                'id' =>'00406', 'name' =>'วิสัยทัศน์และการให้บริการในอนาคต' ,'url' => '#'
                                            ]
                              
                                          ]
                        ];
                break;
            case '005':
                $manu = [
                            'mainManu' =>'Registration',
                            'leftManu' =>[
                                [
                                    'id' =>'00501',  'name' =>'Registration','url' => '#'
                                ]
                            ]
                        ];                
                break;
            case '006':
                $manu = [
                            'mainManu' =>'Customer Info',
                            'leftManu' =>[
                                [
                                    'id' =>'00601',  'name' =>'Customer Info','url' => 'customer/information'
                                ],[
                                    'id' =>'00603', 'name' =>'Service Log','url' => '#',
                                    'child' =>[
                                                    [
                                                        'id' =>'0060301', 'name' =>'Service Dashboard','url' => 'customer/service-log'
                                                    ],
                                                    [
                                                        'id' =>'0060302',  'name' =>'Rental Space','url' => 'customer/rental-space'
                                                    ],
                                                    [
                                                        'id' =>'0060303', 'name' =>'Port Service','url' => 'customer/port-service'
                                                    ],
                                                    [
                                                        'id' =>'0060304', 'name' =>'Ware House','url' => 'customer/ware-house'
                                                    ],
                                                    [
                                                        'id' =>'0060305', 'name' =>'Work In Process','url' => '#'
                                                    ],
                                                    [
                                                        'id' =>'0060306', 'name' =>'Vehicle Access','url' => 'customer/vehicle-access'
                                                    ]
                                                ]
                                    ]
                            ]
                        ];                
                break;
            case '007':
                $manu = [
                            'mainManu' =>'Download แบบฟอร์ม',
                            'leftManu' =>[
                                [
                                    'id' =>'00701',  'name' =>'Download แบบฟอร์ม','url' => '#'
                                ]
                            ]
                        ];                
                break;
            case '008':
                $manu = [
                            'mainManu' =>'อัตราค่าบริการ',
                            'leftManu' =>[
                                [
                                    'id' =>'00801',  'name' =>'อัตราค่าบริการ','url' => '#'
                                ]
                            ]
                        ];                
                break;
            case '009':
                $manu = [
                            'mainManu' =>'ขอใช้บริการ',
                            'leftManu' =>[
                                [
                                    'id' =>'00901',  'name' =>'ขอใช้บริการ','url' => '#'
                                ]
                            ]
                        ];                
                break;
            case '010':
                $manu = [
                            'mainManu' =>'ข้อมูลการใช้บริการ',
                            'leftManu' =>[
                                [
                                    'id' =>'01001',  'name' =>'ข้อมูลการใช้บริการ','url' => '#'
                                ]
                            ]
                        ];                
                break;
            case '011':
                $manu = [
                            'mainManu' =>'Port Schedule',
                            'leftManu' =>[
                                [
                                    'id' =>'01101',  'name' =>'Port Schedule','url' => '#'
                                ]
                            ]
                        ];                
                break;
             }                
         return $manu;
    }
}
