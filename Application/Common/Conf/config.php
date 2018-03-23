<?php
/*
 * 应用配置
 */
return array(
	//'配置项'=>'配置值'
    'MULTI_MODULE'       => true,
    'DEFAULT_MODULE'     => 'Home', //默认模块
    'URL_MODEL'          => '2', //URL模式
    'SESSION_AUTO_START' => true, //是否开启session

    'MODULE_ALLOW_LIST'  => array('Home', 'Api'),

    'APP_SUB_DOMAIN_DEPLOY'   =>    1, // 开启子域名配置
    'APP_SUB_DOMAIN_RULES'   =>    array(
        // 接口
        'test.tpdemo.cn'      => 'Api',
//        'api.test.supsupp.com' => 'Api',
    ),

    //更多配置参数
    //...
);