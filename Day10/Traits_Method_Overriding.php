<?php

trait hello{
    public function sayHello() {
        echo "Hello from  hello trait.\n";
    }
}
trait bye{
    public function sayHello() {
        echo "Hello from bye trait.\n";
    }
}

// class TestingMultipleTraitInOne{
//     use hello,bye{
//         //hello is a trait and sayHello is a function that is same in both hello and bye
//         //now you define that instaed of bye trait use hello 
//            hello::sayHello insteadof bye;

            //you can change name of Trait using as keyword
            //hello:sayHello as newHello;
//    }
// }

class base{
    public function sayHello() {
        echo "Hello from parent.\n";
    }
}

class childC extends base{
    use hello,bye;
    public function sayHello()
    {
        echo "Hello from child.\n";
    }
}

$test = new childC();
$test->sayHello();


//use access modifier to trait

trait p{
    private function wish() {
        echo "Good morning\n.";
    }
}

class msg{
    use p{
        p::wish as public PublicWish;//use can give new name here
    }
}

$showWish = new msg();
$showWish->PublicWish();//Using new name also also create it as a public