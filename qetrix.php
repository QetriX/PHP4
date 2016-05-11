<?php

/* Copyright (c) QetriX.com. Licensed under MIT License, see /LICENSE.txt file.
 * 16.01.04 | Initial/Startup/Index file, called by webserver rewrite engine
 */

//ini_set("display_errors", 1);ini_set("display_startup_errors", 1);error_reporting(-1);

require __DIR__."/libs/qapp.php";

$app = QApp("");
