<?php
return array(
     // 添加下面一行定义即可
    'app_begin' => array('Behavior\CheckLangBehavior'),
    'view_filter' => array('Common\Behavior\HtmlBehavior')
);