<?php
/**
 * Created by PhpStorm.
 * User: anxin
 * Date: 2018/8/8
 * Time: 17:30
 */

include("./lib/getEmail.php");

$mailControl = new mailControl();

$res = $mailControl->mailReceived();




