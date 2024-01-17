<?php

class MyException extends Exception
{
    function OneNumberErrorMessage()
    {
        $error = "My Exception message: " . $this->getMessage() .
            "<br> Error on line : " . $this->getLine();
        return $error;
    }
}

function division($n1, $n2)
{
    try {
        if ($n1 <= 0) {
            throw new Exception("Please enter valid number<br>");
        }
        if ($n1 <= 1) {
            throw new MyException("dont enter 1<br>");
        }
        $result = $n1 / $n2;
        echo $result;
    } catch (MyException $error) {

        echo $error->OneNumberErrorMessage();

    } catch (Exception $error) {

        echo $error->getMessage();
        
    } finally {
        echo "<br> This will run everytime.";
    }
}
division(0, 10);
division(1, 10);
