<?php
/**
 * Created by PhpStorm.
 * User: hyc
 * Date: 2018/5/13
 * Time: 7:55
 */

namespace app\controllers;


use yii\web\Controller;

class InitializeControllers extends Controller
{

    public function __construct()
    {
        parent::__construct();
        echo 1111;
        die;
    }

}