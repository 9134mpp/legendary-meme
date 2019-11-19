<?php


function get_db_config()
{
    //getenv 获取环境变量的值
    if(getenv("IS_IN_HEROKU")){
        //parse_url() 解析url 返回其组成部分
        $url = parse_url(getenv("DATABASE_URL"));

        return $db_config = [
            'connection' => 'pgsql',
            'host' => $url['host'],
            'databases' => substr($url['path'], 1),
            'username' => $url['usr'],
            'password' => $url['pass'],

        ];

    }
    return $db_config = [
        'connection' => env('DB_CONNECTION', 'mysql'),
        'host' => env('DB_HOST', 'localhost'),
        'database'  => env('DB_DATABASE', 'forge'),
        'username'  => env('DB_USERNAME', 'forge'),
        'password'  => env('DB_PASSWORD', ''),
    ];

}
