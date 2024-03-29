<?php
class Connection {
    private static $instance = null, $conn = null;
    private function __construct($config) {
        //kết nối database
        try {
            $dsn = 'mysql:dbname='.$config['db'].';host='.$config['host'];
            
            $options = [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
            $con = new PDO($dsn, $config['user'], $config['pass'], $options);
            self::$conn = $con;
        } catch (Exception $exception) {
            $mess = $exception->getMessage();
            App::$app->loadError('database', ['message' => $mess]);
            die();
        }
    }

    public static function getInstance($config) {
        if(self::$instance == null) {
            $connection = new Connection($config);
            self::$instance = self::$conn;
        }
        return self::$instance;
    }
}