<?php
class A {};
class B extends A {};
class C {};

function customGetType ( A $className ) {
    echo gettype($className);
}
$a = new A();
$b = new B();
$c = new C();
customGetType($a);
customGetType($b);
customGetType($c);