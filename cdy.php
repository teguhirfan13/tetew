<?php
//random all voc tada 0.1 by @riyancoday 
error_reporting(0);
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://e.gift.id/error400");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		curl_setopt($ch, CURLOPT_NOBODY, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = "Authority: e.gift.id";
$headers[] = "Cache-Control: max-age=0";
$headers[] = "Upgrade-Insecure-Requests: 1";
$headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8";
$headers[] = "Accept-Encoding: gzip, deflate, br";
$headers[] = "Accept-Language: en-US,en;q=0.9";
$headers[] = "Cookie: __cfduid=df03bfe788da63fa206083665c94d7e4b1543120489; ms-ga-sess=HNB67xXUwa0DeofNmhY8rkI8MBnOIRcWDaRCN2i34GSZGnyzNgt1urO4qqUJVCJCKaa7l59Vm3PUOsDWJnQIVdmwUV1Z4CYYJnlleUEMXx4gUhiYUTpQuD7C1pBGarZrFwxsK8LStfp8dC4734OkPa5OEB16uSXsjHAigWg9Ry9jmnhQlvtfrd2c0vFdxWYe8rBYapigSxpZLPDRBPqDaPNQ1oq33L5yB2A7gbaEW4pxsYOrlfKSau6qsRPoEsDi; AWSELB=B7757D8D14F451F1784944891DCB77883AA4290BBB81B9A30F6D4EADA20BC2E7230480FD89B6AAAFB27A532CD02F29BA03B5F00C98A56E2D70A8FDF058F8157C9C3637D988";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
		preg_match_all('/code:"(.*?)",usedAt/', $result, $code);
		preg_match_all('/status:"(.*?)",programId/', $result, $status);
		preg_match_all('/programName:"(.*?)",EmailTemplateId/', $result, $programName);
echo $result;
$code = $code[1][0];
$status = $status[1][0];
$programName = $programName[1][0];

echo "<center>$status - <a href=https://e.gift.id/u/".$code.">$code</a> - $programName [c0dayTeam]</center>";