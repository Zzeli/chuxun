<?php
require 'A/mao.php';
require 'B/mao.php';
require 'A/controller/indexController.php';
require 'B/controller/indexController.php';
$a=new A\mao();
$a->aa();
echo "<br>";
$b=new B\mao();
$b->bb();
echo "<br>";
$c=new A\controller\indexController();
$c->index();
echo "<br>";
$d=new B\controller\indexController();
$d->index();

//use A\controller\indexController;
//require 'A/controller/indexController.php';
//$e=new indexController();
//$e->index();

