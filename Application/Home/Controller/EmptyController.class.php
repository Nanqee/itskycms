<?php
// +----------------------------------------------------------------------
// | ITskyCMS
// +----------------------------------------------------------------------
// | Copyright (c) 2015 http://www.itsky71.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: itsky <itsky71@foxmail.com>
// +----------------------------------------------------------------------
namespace Home\Controller;
use Think\Controller;
/**
 * Description of LangController
 * 前台空控制器
 * @author itsky
 */
class EmptyController extends Controller{
    public function index(){
        header('HTTP/1.1 404 Not Found');
        header('Status:404 Not Found');
        $this->display('Empty:index');
    }

    public function page(){
        $this->assign('code', I('get.code'));
        header("HTTP/1.0 404 Not Found");
        $this->display('Empty:pages');
    }
}
