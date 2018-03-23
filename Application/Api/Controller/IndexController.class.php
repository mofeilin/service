<?php
namespace Api\Controller;

class IndexController extends BaseController {
    public function get(){
        switch ($this->_method){
            case 'get': // get请求处理代码
                $data['data']['data'] = 'okdd';
                $data['data']['msg'] = 'ok';
                $data['data']['status'] = 'ok';
                $data['data']['dd'] = $this->_method;
                $this->response($data,$type='JSON',$code=405);
//                if ($this->_type == 'html'){
//
//                }elseif($this->_type == 'xml'){
//
//                }
                break;
            case 'put': // put请求处理代码

                break;
            case 'post': // post请求处理代码

                break;
        }
    }
}