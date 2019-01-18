<?php
include 'template.html';


















//class GetConnection
//{
//    protected function getConnection()
//    {
//        Connection::Connection();
//    }
//}
//
//class getData extends GetConnection
//{
//    public function getId()
//    {
//        $connection = $this->getConnection();
//        $stmt = $connection->query('SELECT * FROM books');
//        while ($row = $stmt->fetch()){
//            echo $row[user_id];
//        }
//
//    }
//    public function setId()
//    {
//        $this->getConnection();
//    }
//}
//
//class Connection
//{
//    const USERNAME = 'root';
//    const PASSWORD = '';
//    const DATABASE = 'magazine';
//    const HOST = '127.0.0.1';
//
//    private static $connections = null;
//
//    public static function getConnection()
//    {
//        $user = self::USERNAME;
//        $pass = self::PASSWORD;
//        $db = self::DATABASE;
//        $host = self::HOST;
//
//        if (empty(self::$connections)){
//            $dsn = 'mysql:host=$host;dbname=$db';
//            $pdo = new PDO($dsn,$user,$pass);
//            self::$connections;
//            echo 'norm';
//        }
//        return self::$connections;
//    }
//
//}