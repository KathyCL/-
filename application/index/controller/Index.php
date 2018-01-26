<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{

    /*
     * 名称 name
     * 单份金额  money
     * 数量 num
     * 类型 type 1 现金 2 代金券
     * 是否控制 is_hold 0 否 1 是
     */

    public function add()
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){

            dump($_POST);exit;

            $data=[
//                'cardsn'=>$_POST[''],
//                'money'=>$money,
//                'type'=>$type,
//                'link'=>$link,
            ];

            $re=db('content')->insert($data);

            if($re==1){
                echo '添加成功';
            }

        }

        return $this->fetch('add');
    }

    public function index()
    {

    }




}
