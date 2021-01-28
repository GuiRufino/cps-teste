<?php
function mysqlConfig(){
    return [
        'host'     => 'localhost',
        'port'     => '3306',
        'user'     => 'root',
        'password' => '5544',
        'database' => 'escala'
    ];
}

return [
    'env'      =>  "dev",
    'database' => [ 'mysql' => mysqlConfig() ]
];