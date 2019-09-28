<?php
/**
 * Created by PhpStorm.
 * User: ShonnZong
 * Date: 2019/9/26
 * Time: 12:07
 */

namespace app\api\service\user;

use app\api\logic\user\UserLogin;

/**
 * Class UserService 会员
 * @package app\api\service\user
 */
class UserService
{
    public static function login($username, $password)
    {
        $c = new UserLogin();
        $c->setUsername($username);
        $c->setPassword($password);
        return $c->process();
    }
}