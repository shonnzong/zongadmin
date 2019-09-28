<?php
/**
 * Created by PhpStorm.
 * User: ShonnZong
 * Date: 2019/9/28
 * Time: 16:07
 */

namespace app\api\controller\validate;


use app\common\controller\Api;
use app\common\model\User;

class Validate extends Api
{
    protected $noNeedLogin = '*';
    protected $layout = '';
    protected $error = null;

    public function _initialize()
    {
        parent::_initialize();
    }

    /**
     * 检测邮箱是否被占用
     *
     * @param string $email 邮箱
     * @param string $id    排除会员ID
     */
    public function check_email_available()
    {
        $email = $this->request->request('email');
        $id = (int)$this->request->request('id');
        $count = User::where('email', '=', $email)->where('id', '<>', $id)->count();
        if ($count > 0) {
            $this->error(__('邮箱已经被占用'));
        }
        $this->success();
    }

    /**
     * 检测用户名是否被占用
     *
     * @param string $username 用户名
     * @param string $id       排除会员ID
     */
    public function check_username_available()
    {
        $email = $this->request->request('username');
        $id = (int)$this->request->request('id');
        $count = User::where('username', '=', $email)->where('id', '<>', $id)->count();
        if ($count > 0) {
            $this->error(__('用户名已经被占用'));
        }
        $this->success();
    }

    /**
     * 检测手机是否被占用
     *
     * @param string $mobile 手机号
     * @param string $id     排除会员ID
     */
    public function check_mobile_available()
    {
        $mobile = $this->request->request('mobile');
        $id = (int)$this->request->request('id');
        $count = User::where('mobile', '=', $mobile)->where('id', '<>', $id)->count();
        if ($count > 0) {
            $this->error(__('该手机号已经占用'));
        }
        $this->success();
    }

    /**
     * 检测手机是否存在
     *
     * @param string $mobile 手机号
     */
    public function check_mobile_exist()
    {
        $mobile = $this->request->request('mobile');
        $count = User::where('mobile', '=', $mobile)->count();
        if (!$count) {
            $this->error(__('手机号不存在'));
        }
        $this->success();
    }

    /**
     * 检测邮箱是否存在
     *
     * @param string $mobile 邮箱
     */
    public function check_email_exist()
    {
        $email = $this->request->request('email');
        $count = User::where('email', '=', $email)->count();
        if (!$count) {
            $this->error(__('邮箱不存在'));
        }
        $this->success();
    }
}