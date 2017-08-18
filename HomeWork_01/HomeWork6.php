<?php

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A;
$b1 = new B;
$a1->foo(); 
$b1->foo(); 
$a1->foo(); 
$b1->foo();

// static переменная иохраняется в окружение объектов только того же класса и его метода, где была обьявлена 
// и не сохраняется для инстансов различных классов.


?>