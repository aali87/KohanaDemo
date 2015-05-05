<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-05 17:11:44 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\wamp\www\KohanaTest\system\classes\Kohana\Cookie.php:67
2015-05-05 17:11:44 --- DEBUG: #0 C:\wamp\www\KohanaTest\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('s_nr', NULL)
#1 C:\wamp\www\KohanaTest\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('s_nr')
#2 C:\wamp\www\KohanaTest\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\KohanaTest\system\classes\Kohana\Cookie.php:67
2015-05-05 17:12:20 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\wamp\www\KohanaTest\system\classes\Kohana\Cookie.php:67
2015-05-05 17:12:20 --- DEBUG: #0 C:\wamp\www\KohanaTest\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('s_nr', NULL)
#1 C:\wamp\www\KohanaTest\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('s_nr')
#2 C:\wamp\www\KohanaTest\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\KohanaTest\system\classes\Kohana\Cookie.php:67