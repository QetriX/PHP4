<?php

/* Copyright (c) QetriX.com. Licensed under MIT License, see /LICENSE.txt file.
 * 16.04.28 | QetriX Application Class
 */

function QApp($path)
{
	$app = array();
	
	define("PERF_START_TIME", microtime(true));
	define("PERF_START_MEM", memory_get_usage());

	/// Set every encoding to UTF-8
	mb_internal_encoding("UTF-8");
	mb_http_output("UTF-8");
	mb_http_input("UTF-8");
	mb_language("uni");
	mb_regex_encoding("UTF-8");

	/// QetriX uses UTC TZ
	date_default_timezone_set("UTC");
}

function QApp_parsePath($path)
{
}

function QApp_loadModule($page)
{
}
