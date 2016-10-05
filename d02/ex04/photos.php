#!/usr/bin/php
<?PHP

$c = curl_init($argv[1]);
$str = file_get_contents($argv[1]);
preg_match_all('/<img.{0,}src=["|\/|h][[:graph:]]+/', $str, $match);
$i = count($match[0]) ;
$j = 0;

while ($j != $i) {
	$val = substr(strstr($match[0][$j], "src="), 5);
	$vl = str_replace('"', '', $val);
	$vl = str_replace('>', '', $vl);
	if ($vl[0][0] == "/")
		$match[0][$j++] = $argv[1] . $vl;
	else
		$match[0][$j++] = $vl;
}

$val = $argv[1];
if (substr($argv[1], 0, 7) == "http://")
	$val = substr($argv[1], 7);
if (file_exists($val) == FALSE)
	mkdir($val, 0777, true);

foreach ($match[0] as $key) {
	$path = $key;
	$name= basename($path);
	if (file_exists('./$val/'.$name)){continue;} 
	$headers[] = 'Accept: image/gif, image/x-bitmap, image/jpeg, image/pjpeg';              
	$headers[] = 'Connection: Keep-Alive';         
	$headers[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8';         
	$user_agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)';         
	$curl = curl_init($path);         
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);         
	curl_setopt($curl, CURLOPT_HEADER, 0);         
	curl_setopt($curl, CURLOPT_USERAGENT, $user_agent);         
	curl_setopt($curl, CURLOPT_TIMEOUT, 30);         
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);         
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);         
	$image = curl_exec($curl);         
	file_put_contents($val.'/'.$name,$image);
	curl_close($curl);         
}

?>
