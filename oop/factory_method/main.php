<?php

require("Product.php");
require("Factory.php");
require("IDcard.php");
require("IDcardFactory.php");

$factory = new IDcardFactory();
$card1 = $factory->create("アクア");
$card2 = $factory->create("エリス");
$card1->used();
$card2->used();