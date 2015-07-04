<?php

require_once('bin/oop.php');

Item::q()->where(["id" => 5])->call();
