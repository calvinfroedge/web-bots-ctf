<?php

require(__DIR__.'/uagent.php');
$routes = ['/', '/s1', '/s2', '/s3', '/s4', '/s5', '/s6', '/s7', '/s8', '/s9', "http://52.7.46.189/doc/QpeiPUMM00", "http://52.7.46.189/doc/TPtgpyHOR5", "http://52.7.46.189/doc/MFTF3kzVu1", "http://52.7.46.189/doc/GlqUDfOq2O", "http://52.7.46.189/doc/qVDUc3sTRj", "http://52.7.46.189/doc/ZEZTj3dTYI", "http://52.7.46.189/doc/UE3lyHBn7D", "http://52.7.46.189/doc/cyzQsLTVFL", "http://52.7.46.189/doc/fFpezJhMCg", "http://52.7.46.189/doc/vwUyStgtRo", "http://52.7.46.189/doc/64WGUpsOl7", "http://52.7.46.189/doc/zANYPmI79k", "http://52.7.46.189/doc/nERidJMtcE", "http://52.7.46.189/doc/SjIP0Cesrz", "http://52.7.46.189/doc/z0anZZJH6S", "http://52.7.46.189/doc/2uwTNKDAeP", "http://52.7.46.189/doc/e69WV9zaC0", "http://52.7.46.189/doc/Kc1Uz0UiH1", "http://52.7.46.189/doc/bKvIDjsgTG", "http://52.7.46.189/doc/67Ng4IqES2", "http://52.7.46.189/doc/EDeFxNGr6o", "http://52.7.46.189/doc/sh8Y0Lhs2b", "http://52.7.46.189/doc/98iWonEP1x", "http://52.7.46.189/doc/RGa5mIT2aZ", "http://52.7.46.189/doc/qChyBhkSKm", "http://52.7.46.189/doc/4TvmQUKvJL", "http://52.7.46.189/doc/2AsdGOWzR6", "http://52.7.46.189/doc/zhJRQk9bdT", "http://52.7.46.189/doc/xhN3EDXo8H", "http://52.7.46.189/doc/abhDpYrlyj", "http://52.7.46.189/doc/s7BbZrw8DJ", "http://52.7.46.189/doc/2b0PeFsc3B", "http://52.7.46.189/doc/TeNbRc9jyH", "http://52.7.46.189/doc/C1PdcPFIXi", "http://52.7.46.189/doc/sZttPI8iUc", "http://52.7.46.189/doc/TNrGYjT8Cs", "http://52.7.46.189/doc/QftGtGv8pt", "http://52.7.46.189/doc/rRtVliDtAx", "http://52.7.46.189/doc/Gul7akq4s3", "http://52.7.46.189/doc/wjiZ0LFvU4", "http://52.7.46.189/doc/ZlWshhLULm", "http://52.7.46.189/doc/rsQNA0715A", "http://52.7.46.189/doc/4BTnBT9hp3", "http://52.7.46.189/doc/mppiSGADBm", "http://52.7.46.189/doc/03OQQoRYpW", "http://52.7.46.189/doc/yuysR9m0qM", "http://52.7.46.189/doc/4Mbu54bGIM", "http://52.7.46.189/doc/2IPQyGfpEF", "http://52.7.46.189/doc/md9UF1312u", "http://52.7.46.189/doc/O7hZBm3N2M", "http://52.7.46.189/doc/A4uqV26asL", "http://52.7.46.189/doc/QOYZJD1MF3", "http://52.7.46.189/doc/htaytMUxzX", "http://52.7.46.189/doc/j91NzXQG8j", "http://52.7.46.189/doc/rY8pXR2YEI", "http://52.7.46.189/doc/2VbctEZncy", "http://52.7.46.189/doc/kvImjij9Yr", "http://52.7.46.189/doc/tpqBOnsRm6", "http://52.7.46.189/doc/zp1LCvpBSC", "http://52.7.46.189/doc/ad7SAqbTA9", "http://52.7.46.189/doc/l4yLFn98fw", "http://52.7.46.189/doc/fOVgAyMZ9E", "http://52.7.46.189/doc/CjSJcsanmK", "http://52.7.46.189/doc/xIP6uuuDCJ", "http://52.7.46.189/doc/aRy688EV8O", "http://52.7.46.189/doc/zK8stlUDJh", "http://52.7.46.189/doc/ogZdmtIQ7l", "http://52.7.46.189/doc/Aid8omg3ho", "http://52.7.46.189/doc/RR80jCleg4", "http://52.7.46.189/doc/vFkvTHYBy6", "http://52.7.46.189/doc/W8oahMwxQN", "http://52.7.46.189/doc/WHE5IYH3cY", "http://52.7.46.189/doc/7IDsdxab8J", "http://52.7.46.189/doc/i5RGf9tMGj", "http://52.7.46.189/doc/AD1eIJdqNp", "http://52.7.46.189/doc/pU73nkAywI", "http://52.7.46.189/doc/hPO9v4iZQZ", "http://52.7.46.189/doc/iqCkFl4SLR", "http://52.7.46.189/doc/ibMpe9KOHh", "http://52.7.46.189/doc/wY6k7CoqBf", "http://52.7.46.189/doc/pUF1ekmid8", "http://52.7.46.189/doc/avjWVx6GmN", "http://52.7.46.189/doc/YSM4dUHCki", "http://52.7.46.189/doc/RKcxLrS8K5", "http://52.7.46.189/doc/hUBBRx9Xdv", "http://52.7.46.189/doc/KboxgBsXeN", "http://52.7.46.189/doc/g6xsDjUvsE", "http://52.7.46.189/doc/BJzclqKunX", "http://52.7.46.189/doc/089oGp08ne", "http://52.7.46.189/doc/VDkt6YM0te", "http://52.7.46.189/doc/F5YfikG2P4", "http://52.7.46.189/doc/ZPc9eTze2W", "http://52.7.46.189/doc/tYAOrGMeHg", "http://52.7.46.189/doc/snlrCELjGA", "http://52.7.46.189/doc/nGqAPEtoTv", "http://52.7.46.189/doc/lmuVbVCX9k", "http://52.7.46.189/doc/eCIz4ldQEU", "http://52.7.46.189/doc/r1ARBpw4Oq", "http://52.7.46.189/doc/A9N45Y0HVa"];

//Read input data file, add 10k entries to routes
$routesLength = count($routes) - 1;
//+ 10000;

$ips = ["39.165.185.114", "5.120.191.80", "247.134.238.6", "92.23.188.98", "36.110.41.74", "179.87.231.47", "47.236.33.58", "226.10.11.198", "158.49.90.51", "152.208.96.140", "206.73.156.15", "171.132.251.206", "19.240.30.115", "242.100.255.191", "88.144.197.55", "255.235.180.131", "97.122.205.197", "201.222.164.217", "19.82.160.168", "220.47.183.236", "224.219.86.138", "165.211.78.84", "206.178.40.202", "148.151.36.232", "120.211.34.26", "109.98.210.167", "200.190.30.60", "224.69.148.188", "30.3.96.137", "63.13.5.251", "181.213.169.94", "26.210.92.137", "61.1.85.243", "233.249.147.119", "156.133.36.200", "159.67.253.85", "17.15.233.176", "2.0.57.196", "50.196.232.71", "106.242.184.246", "27.186.122.82", "186.8.27.36", "102.204.179.204", "226.43.172.250", "12.23.102.13", "254.247.200.113", "63.1.131.100", "163.187.4.14", "161.235.160.102", "225.122.125.121", "249.23.193.145", "152.233.162.218", "32.49.176.100", "34.223.214.62", "120.87.53.204", "69.171.168.44", "60.172.97.87", "232.172.36.39", "218.233.112.95", "122.152.162.249", "218.210.40.132", "131.56.78.79", "101.212.158.142", "140.51.186.51", "20.88.87.196", "5.42.206.4", "145.104.133.152", "232.162.215.133", "104.139.184.110", "103.131.206.223", "235.1.92.76", "209.107.17.38", "72.33.224.144", "69.212.77.137", "89.14.176.56", "24.176.213.9", "234.118.98.86", "234.120.75.235", "114.134.115.143", "18.30.65.161", "255.162.213.148", "113.41.114.203", "52.21.176.165", "131.178.103.80", "252.115.199.22", "190.228.215.109", "222.254.30.89", "224.3.103.162", "226.156.228.93", "182.113.248.5", "71.42.16.244", "181.238.85.91", "227.226.251.246", "192.66.46.188", "182.225.102.253", "166.30.243.184", "115.149.2.109", "215.159.178.69", "131.123.80.9", "41.224.157.35"];

$sleepTimes = range(1,60);

$contentLength = "542";

function pickRandom($arr, $arrLength){
  $pick = rand(0, $arrLength); //random pick here

  return $arr[$pick];
}

function ts(){
  return date("d/M/Y:h:m:s", mktime());
}

function logWrite($msg){
   $h = fopen('/var/log/apache2/access.log', 'a');
   fwrite($h, $msg."\n");
   fclose($h);
}

while(true){
  $msg = pickRandom($ips, 99) . ' - - [' . ts() . ' +0000] GET ' . pickRandom($routes, $routesLength) . ' HTTP/1.1" 200 '.$contentLength.' "-" "'.random_uagent().'"';
  logWrite($msg);
  //Perform healthcheck
  //GET 127.0.0.1/, response time should be under 1s
  $sleepTime = pickRandom($sleepTimes, 2);
  echo "sleeping... for '.$sleepTime.'\n";
  sleep($sleepTime); //Pick random sleep time between requests here, between 1 and 10 seconds
}
