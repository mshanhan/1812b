<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LoginController extends Controller
{
    public function register()
    {
        return view('index/register');
    }

    public function login()
    {
        return view('index/login');
        die;
    }
    public function regdo(Request $request)
    {
        $data = $request->input();
        if (empty($data['u_name']) || empty($data['u_pwd']) || empty($data['u_email'])) {
            die('缺少参数');
        }
        $data['u_pwd']=md5($data['u_pwd']);
        $res1 = DB::table('user')->first();
        if ($data['u_name'] == $res1['u_name']) {
            die('该用户已经注册');
        }

        $res=DB::table('user')->insert($data);
        //dd($res);

        if($res){
            echo json_encode(['msg'=>'注册成功','code'=>1]);
        }
    }

    //执行登录
    public function logindo(Request $request )
    {
        $data=$request->input();
//        dd($data);

        if($data['u_name']=='' || $data['u_pwd']==''){
            return ['code'=>2, 'msg'=>'任何选项都不得为空'];
        }

        $where = [
            'u_name'=>$data['u_name'],
        ];
        $res = DB::table('user')->where($where)->first();
//        dd($res);
        if(empty($res)){
            return ['code'=>4,'msg'=>'用户不存在'];
        }else if(md5($data['u_pwd'])!=$res->u_pwd){
            return ['code'=>3,'msg'=>'密码错误'];
        }
        session(['u_id'=>$res->u_id]);
        return ['code'=>1,'msg'=>'登陆成功'];
    }


}
