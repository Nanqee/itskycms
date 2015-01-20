<?php
$spath = MODULE_PATH.'Lang/'.LANG_SET.'/siteset_info.php';
if(file_exists($spath)){
    require_once $spath;
}else{
    $siteset_info = array();
}
$siteset = array(
    'VARINFO'       =>  '参数说明',
    'VARNAME'       =>  '变量名',
    'VARVAL'        =>  '参数值',
    'VARTYPE'       =>  '变量类型',
    'STRING'        =>  '字符串',
    'NUMBER'        =>  '数字',
    'BOOL'          =>  '布尔(Y/N)',
    'TEXT'          =>  '多行文本',
    'GROUP'         =>  '所属组',
    'SELECT_INFO'   =>  '请选择一项...',
    'VNL'           =>  '变量名长度必须为3-20个字符！',
    'VNU'           =>  '变量名已存在！',
    'INFOL'         =>  '参数说明长度必须为2-50个字符！',
    'GROUPIDR'      =>  '所属组为必选！',
    'ADD_ERROR'     =>  '系统变量添加失败！',
    'ADD_SUCCESS'   =>  '系统变量添加成功！'
);
return array_merge($siteset, $siteset_info);