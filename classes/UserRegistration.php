<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.01.2019
 * Time: 15:16
 */

class UserRegistration
{
    public function AddUser()
    {
        session_start();
        $pdo = ConnectionDatabase::getConnection();
        if (!isset($_SESSION['login_form'])) {
            if (isset($_POST['submit'])) {
                $login = $_POST['login'];
                $user_password = $_POST['user_password'];
                if (!empty($login && $user_password)) {
                    $query = "SELECT login,user_password FROM user_data WHERE login=? and user_password=?";
                    $stmt = $pdo->prepare($query);
                    $stmt->execute([$login,$user_password]);
                    $result = $stmt->fetchAll();
                    if ($result != null){
                        header('location: editprofile.php');
                        echo 'Поздавляем вы зашли на сайт:';
                    } else {
                        echo 'dibil';
                    }
                }
            }
        }
    }
}