<?php
/**
 * Created by PhpStorm.
 * User: ShonnZong
 * Date: 2019/9/25
 * Time: 17:01
 */

namespace app\api\controller\index;


use app\common\controller\Api;

/**
 * Class Index 首页接口
 * @package app\api\controller\index
 */
class Index extends Api
{
    protected $noNeedLogin = ['*'];
    protected $noNeedRight = ['*'];

    /**
     * 首页
     */
    public function index()
    {
        $this->success('请求成功');
    }
}