<?php

namespace App\Http\Controllers\Apps;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Model\UserModel;
use Illuminate\Support\Facades\Redis;

class AppsController extends Controller
{
    //

    public function pass_portl(){
        $data=$_POST;
        $url='http://psptt.lushishu.cn/pass_portll';
        $ch=curl_init($url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        $res=curl_exec($ch);
        curl_close($ch);
        $resl=json_decode($res,true);
        return $resl;
    }

}
