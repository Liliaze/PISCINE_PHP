#!/usr/bin/php
<?php

function upper($str)
{
	$dst = strtoupper($str[0]);
	return ($dst);
}

function up($subject)
{
	$pattern = '/.*/';
	$ret = preg_replace_callback($pattern, "upper", $subject[0]);
	return($ret);
}

function between_balise($subject)
{
	$pattern = '/>[^<]+</';
	$ret = preg_replace_callback($pattern, "up", $subject[0]);
	return ($ret);
}

function in_title($subject)
{
	$pattern = "/\".*\"/";
	$ret = preg_replace_callback($pattern, "upper", $subject[0]);
	return ($ret);
}

function title($subject)
{
	$pattern = '/title=\"[^\"]+\"/';
	$ret = preg_replace_callback($pattern, "in_title", $subject[0]);
	return ($ret);
}

if ($argv[1])
{
	$tmp = file_get_contents($argv[1]);
	$re1 = "/<a .*>.*a>/";

	$ptt = explode(PHP_EOL, $tmp);
	$page = implode("###I_LOVE_THIS###", $ptt);
	$ret = preg_replace_callback($re1, "between_balise", $page);
	$end = preg_replace_callback($re1, "title", $ret);
	$end = str_replace("###I_LOVE_THIS###", "\n", $end);
	echo ($end);
}
?>
