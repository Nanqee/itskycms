<?php
$spath = MODULE_PATH.'Lang/'.LANG_SET.'/siteset_info.php';
if(file_exists($spath)){
    require_once $spath;
}else{
    $siteset_info = array();
}
$siteset = array(
    'VARINFO'           =>  '參數說明',
    'VARNAME'           =>  '變量名',
    'VARVAL'            =>  '參數值',
    'VARTYPE'           =>  '變量類型',
    'STRING'            =>  '字符串',
    'NUMBER'            =>  '數字',
    'BOOL'              =>  '布爾(Y/N)',
    'TEXT'              =>  '多行文本',
    'CHECKBOX'          =>  '多選',
    'RADIO'             =>  '單選',
    'SELECT'            =>  '下拉列表',
    'GROUP'             =>  '所屬組',
    'SELECT_INFO'       =>  '請選擇一項...',
    'VNL'               =>  '變量名長度必須為3-20個字符！',
    'VNU'               =>  '變量名已存在！',
    'INFOL'             =>  '參數說明長度必須為2-50個字符！',
    'GROUPIDR'          =>  '所屬組為必選！',
    'ADD_ERROR'         =>  '系統變量添加失敗！',
    'ADD_SUCCESS'       =>  '系統變量添加成功！',
    'SENDING'           =>  '發送中...',
    'SEND_OK'           =>  '發送成功！',
    'TEST_MAIL_TITLE'   => 'ITskyCMS - 測試郵件',
    'SHOW_PAGE'         =>  '內容頁：',
    'LIST_PAGE'         =>  '列表頁：'
);
return array_merge($siteset, $siteset_info);