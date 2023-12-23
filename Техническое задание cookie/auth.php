<?php
function checkAuth($login, $password)
{
    require __DIR__ . '/usersDB.php';

    foreach ($arrayUsers as $user) {
        if ($user['login'] == $login && $user['pass'] == $password) {
            return true;
        }
    }
    return false;
}

function getUserLogin()
{
    $loginFromCookie = $_COOKIE['login'] ? $_COOKIE['login'] : '';
    $passFromCookie = $_COOKIE['password'] ? $_COOKIE['password'] : '';

    if (checkAuth($loginFromCookie, $passFromCookie)) {
        return $loginFromCookie;
    } else {
        return null;
    }
}
