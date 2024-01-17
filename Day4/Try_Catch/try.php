<?php

class MyException extends Exception
{
};
function CheckRole($role)
{

    try {
        if ($role !== "admin") {
            throw new MyException("You are not allow to access this<br>");
        }
    } catch (MyException $e) {

        echo 'Catch MyException locally: ', $e->getMessage();

       throw $e;
    }
}
try {
    CheckRole("user");
    $role = "admin";
    echo "Your Role is: $role<br>";
} catch (MyException $e) {
    echo "Catch this at admin level<br>" . $e->getMessage();
}
