<?php

/*
1. Create accesslog1.log file with chmod 666 (rw-rw-rw-) if you need it
2. Include to your php file 
  include('links_magic.php');
  or
  include('/some/local/path/to/links_magic.php');
  
3. Show to users only:
You want, for example something like this:
<div>
  <a href="http://somelink.com/" id="something1" class="something2">Go-go-go</a>
</div>

3.1
Usage if you want to show this link to bots and crawlers only:
<div>
  <?php LinkMagicBots('http://somelink.com/','Go-go-go','id="something1" class="something2"'); ?>
</div>
3.2
Usage if you want to show this link to users only:
<div>
  <?php LinkMagicUsers('http://somelink.com/','Go-go-go','id="something1" class="something2"'); ?>
</div>

* Please check quotes " and ' at the last attribute of the function,
4. Edit $GLOBALS['ipRanges'] if you need to set bots ranges

5.accessLog1.txt must be located in path where is located file which include hiddenMagic plugin
 (For wordpress it is site root path). And check if file is available for write log.
*/

//Ips list
$GLOBALS['ipRanges'] = array(
//Google
'4.3.2.0 - 4.3.2.255',//GOGL
'8.8.4.0 - 8.8.4.255',
'8.8.8.0 - 8.8.8.255',
'8.8.6.0 - 8.8.6.255',
'12.216.80.0 - 12.216.80.255',
'12.234.149.240 - 12.234.149.247',
'63.158.137.224 - 63.158.137.231',
'63.237.119.112 - 63.237.119.119',
'64.41.221.192 - 64.41.221.207',
'64.68.64.64 - 64.68.64.127',
'64.68.80.0 - 64.68.87.255',
'64.68.88.0 - 64.68.95.255',
'64.233.160.0 - 64.233.191.255',
'66.102.0.0 - 66.102.15.255',
'66.249.64.0 - 66.249.95.255',//Mostly often G bots comes from here
'67.148.177.136 - 67.148.177.143',
'70.32.128.0 - 70.32.159.255',
'72.14.192.0 - 72.14.255.255',
'74.125.0.0 - 74.125.255.255',
'108.170.192.0 - 108.170.255.255',
'108.177.0.0 - 108.177.127.255',
'142.250.0.0 - 142.251.255.255',
'172.217.0.0 - 172.217.255.255',
'172.253.0.0 - 172.253.255.255',
'173.194.0.0 - 173.194.255.255',
'192.178.0.0 - 192.179.255.255',
'198.108.100.192 - 198.108.100.207',
'207.223.160.0 - 207.223.175.255',
'208.46.199.160 - 208.46.199.167',
'209.85.128.0 - 209.85.255.255',
'209.185.108.128 - 209.185.108.255',
'216.33.229.144 - 216.33.229.151',
'216.33.229.160 - 216.33.229.167',
'216.58.192.0 - 216.58.223.255',
'216.109.75.80 - 216.109.75.95',
'216.239.32.0 - 216.239.63.255',
'2001:4860:: - 2001:4860:FFFF:FFFF:FFFF:FFFF:FFFF:FFFF',
'2607:F8B0:: - 2607:F8B0:FFFF:FFFF:FFFF:FFFF:FFFF:FFFF',
'2001:428:6402:204:: - 2001:428:6402:204:FFFF:FFFF:FFFF:FFFF',
'65.167.144.64 - 65.167.144.79',//GOOGL
'65.170.13.0 - 65.170.13.15',
'63.166.17.128 - 63.166.17.255',
'65.171.1.144 - 65.171.1.159',
'64.9.224.0 - 64.9.255.255',
'63.161.156.0 - 63.161.156.255',
'2604:CA00:: - 2604:CA00:FFFF:FFFF:FFFF:FFFF:FFFF:FFFF',
'8.6.48.0 - 8.6.55.255',
'74.125.116.0 - 74.125.119.255',//GOOGL-1
'74.125.120.0 - 74.125.123.255',
'216.239.35.0 - 216.239.35.255',
'74.125.56.0 - 74.125.63.255',
'72.14.224.0 - 72.14.231.255',
'66.249.86.0 - 66.249.87.255',
'66.102.14.0 - 66.102.14.255',
'216.239.39.0 - 216.239.39.255',
'216.239.44.0 - 216.239.45.255',
'216.239.33.0 - 216.239.33.255',
'216.239.55.0 - 216.239.55.255',
'72.14.241.0 - 72.14.241.255',
'2620:15C:: - 2620:15C:FFF:FFFF:FFFF:FFFF:FFFF:FFFF',
'2620:0:1000:: - 2620:0:10FF:FFFF:FFFF:FFFF:FFFF:FFFF',
'104.132.0.0 - 104.135.255.255',
'104.154.0.0 - 104.155.255.255',//GOOGL-2
'130.211.0.0 - 130.211.255.255',
'146.148.0.0 - 146.148.127.255',
'104.196.0.0 - 104.199.255.255',
'2600:1900:: - 2600:190F:FFFF:FFFF:FFFF:FFFF:FFFF:FFFF',
'199.192.112.0 - 199.192.115.255',
'208.21.209.0 - 208.21.209.15',
'206.160.135.240 - 206.160.135.255',
'108.59.80.0 - 108.59.95.255',
'173.255.112.0 - 173.255.127.255',
'162.216.148.0 - 162.216.151.255',
'8.35.192.0 - 8.35.199.255',
'8.35.200.0 - 8.35.207.255',
'8.34.216.0 - 8.34.223.255',
'8.34.208.0 - 8.34.215.255',
'199.223.232.0 - 199.223.239.255',
'192.158.28.0 - 192.158.31.255',
'162.222.176.0 - 162.222.183.255',
'23.236.48.0 - 23.236.63.255',
'23.251.128.0 - 23.251.159.255',
'107.178.192.0 - 107.178.255.255',
'107.167.160.0 - 107.167.191.255',
'2605:EF80:: - 2605:EF80:FFFF:FFFF:FFFF:FFFF:FFFF:FFFF',//GOOGL-4
'192.104.160.0 - 192.104.161.255',
'216.252.220.0 - 216.252.223.255',
'172.102.8.0 - 172.102.15.255',
'208.44.48.240 - 208.44.48.247',//GOOGLE-5
'63.226.245.56 - 63.226.245.63',//GOOGLE-9
'199.87.241.32 - 199.87.241.63',//Other Google
'70.90.219.48 - 70.90.219.55',
'70.90.219.72 - 70.90.219.79',
'64.124.112.24 - 64.124.112.31', //Customers
'209.249.73.64 - 209.249.73.71',
'64.124.229.168 - 64.124.229.175',
'65.214.255.96 - 65.214.255.111',
'65.211.194.96 - 65.211.194.111',
'65.223.8.48 - 65.223.8.63',
'65.221.133.176 - 65.221.133.191',
'63.84.190.224 - 63.84.190.255',
'65.196.235.32 - 65.196.235.47',
'65.214.112.96 - 65.214.112.127',
'70.90.219.72 - 70.90.219.79',
'70.90.219.48 - 70.90.219.55',
'199.87.241.32 - 199.87.241.63',
'208.74.177.144 - 208.74.177.159',
'128.177.174.32 - 128.177.174.47',
'65.216.183.0 - 65.216.183.255',
'165.193.245.0 - 165.193.245.255',//ADMOB
'70.32.134.0 - 70.32.135.255',//TXVIA
'173.225.26.0 - 173.225.26.255',//Widevine Technologies
//MSN/LIVE
'64.4.0.0 - 64.4.63.255',
'65.52.0.0 - 65.55.255.255',
'131.253.21.0 - 131.253.47.255',
'157.54.0.0 - 157.60.255.255',
'207.46.0.0 - 207.46.255.255',
'207.68.128.0 - 207.68.207.255',
//Yahoo
'8.12.144.0 - 8.12.144.255',
'66.196.64.0 - 66.196.127.255',
'66.228.160.0 - 66.228.191.255',
'67.195.0.0 - 67.195.255.255',
'68.142.192.0 - 68.142.255.255',
'72.30.0.0 - 72.30.255.255',
'74.6.0.0 - 74.6.255.255',
'98.136.0.0 - 98.139.255.255',
'202.160.176.0 - 202.160.191.255',
'209.191.64.0 - 209.191.127.255',
);

//Function converting array of ranges into structure
function parseIpsList($ipRanges)
{
    $ipsListV4Struct=array();
    $ipsListV6Struct=array();

    foreach($ipRanges as $ipRange)
    {
    $ipNodesV4=array();
    $ipNodesV6=array();

    $range=explode("-",$ipRange);
    foreach($range as $listIp)
    {
        $listIp=trim($listIp);
        if (strpos($ipRange,":")===false)
        {
	//for ip v4 ranges
	$ipNodesV4[]=explode(".",$listIp);
        }
        else
        {
            //for ips v6ranges
            $ipNodesV6[]=explode(":",ipCanonical($listIp));
        }
    }
    if(!empty($ipNodesV4[0]) && !empty($ipNodesV4[1])) $ipsListV4Struct[] = $ipNodesV4;
    if(!empty($ipNodesV6[0]) && !empty($ipNodesV6[1])) $ipsListV6Struct[] = $ipNodesV6;
    }
return array('ipListV4'=>$ipsListV4Struct, 'ipListV6'=>$ipsListV6Struct);
}

//check one number of ip range compare with input ipv4
function goByIpNodesV4($level,$inputIpChunked,$checkCurRange)
{
    if($level<=3 && $inputIpChunked[$level]>=$checkCurRange[0][$level] && $inputIpChunked[$level]<=$checkCurRange[1][$level])
    {
    //$res=array();
    $level++;	
    //Deep in recursion
    $res=goByIpNodesV4($level,$inputIpChunked,$checkCurRange);
    //Geting maximum level in recursion (how many numbers in ip level1.level2.level3.level4 is found in range)
    if($level<=$res['levelsEqual']) $level=$res['levelsEqual'];
    return array('foundInRange'=>$checkCurRange,'levelsEqual'=>$level);
    }
return array('foundInRange'=>false, 'levelsEqual'=>NULL);
}

//check one number of ip range compare with input ipv6
function goByIpNodesV6($level,$inputIpChunked,$checkCurRange)
{
    $decChunk=hexdec($inputIpChunked[$level]);
    if($level<=3 && $decChunk>=hexdec($checkCurRange[0][$level]) && $decChunk<=hexdec($checkCurRange[1][$level]))
    {
    //echo $decChunk." ".hexdec($checkCurRange[0][$level])." ".hexdec($checkCurRange[1][$level]);
    //$res=array();
    $level++;	
    //Deep in recursion
    $res=goByIpNodesV6($level,$inputIpChunked,$checkCurRange);
    //Geting maximum level in recursion (how many numbers in ip level1.level2.level3.level4 is found in range)
    if($level<=$res['levelsEqual']) $level=$res['levelsEqual'];
    return array('foundInRange'=>$checkCurRange,'levelsEqual'=>$level);
    }
return array('foundInRange'=>false, 'levelsEqual'=>NULL);
}

//Check if incoming ip is in one of the ranges we have
function checkBotIp($ip)
{
    $ip=ipCanonical($ip);
    $ipListStruct=parseIpsList($GLOBALS['ipRanges']);
    if (strpos($ip,":")===false)
    {
    //ip v4
    $inputIpChunked=explode(".",$ip);
    //Search in ip ranges
    foreach($ipListStruct['ipListV4'] as $checkCurRange)
    {
        $level=0;
        $res=goByIpNodesV4($level,$inputIpChunked,$checkCurRange,NULL);
        //$res['levelsEqual'] returns how many numbers in input ip 1.2.3.4 is found in range
        //If 1.2.3.x is equal to input ip - we return that it is bot
        if ($res['levelsEqual']>=3) 
        {
	@writeLog(date('Y/m/d H:i:s')." Found:".$ip." LevelsEqual:".$res['levelsEqual']);
	return $res['levelsEqual'];
        }
    }
    @writeLog(date('Y/m/d H:i:s')." Not found:".$ip);
    return NULL;
    }
    else
    {
    //ip v6
    if(!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)===false)
    {
        $inputIpChunked=explode(":",$ip);
        //Search in ip ranges
        foreach($ipListStruct['ipListV6'] as $checkCurRange)
        {
	$level=0;
	$res=goByIpNodesV6($level,$inputIpChunked,$checkCurRange,NULL);

	//If FFFF:FFFF:FFFF:x:x:x:x:x is equal to input ip - we return that it is bot
	if ($res['levelsEqual']>=3)
	{
	    @writeLog(date('Y/m/d H:i:s')." Found:".$ip." LevelsEqual:".$res['levelsEqual']);
	    return $res['levelsEqual'];
	}
        }
        @writeLog(date('Y/m/d H:i:s')." Not found:".$ip);
        return NULL;
    }
    }
}

//Check bots function for both of above
function isBot($userAgent,$ip)
{
    $bot=false;
    //Check User Agent
    //The "i" after the pattern delimiter indicates a case-insensitive search
    if (preg_match("/bot/i",$userAgent)) $bot=true;
    elseif (preg_match("/crawl/i",$userAgent)) $bot=true;
    elseif (preg_match("/google/i",$userAgent)) $bot=true;
    elseif (preg_match("/spider/i",$userAgent)) $bot=true;
    elseif (preg_match("/proximic/i",$userAgent)) $bot=true;
    elseif (preg_match("/yahoo/i",$userAgent)) $bot=true;
    elseif (preg_match("/msn/i",$userAgent)) $bot=true;
    elseif (preg_match("/AhrefsBot/i",$userAgent)) $bot=true;
    if($bot==true) {
    @writeLog(date('Y/m/d H:i:s')." Found:".$ip." by UA:".$userAgent);
    return $bot;
    }
    //Check given ip Ranges
    $levelsEqual=checkBotIp($ip);
    if($levelsEqual>=3) $bot=true;
    return $bot;
}

/* Support functions */
//!! Returns :0: instead of ::
function ipCanonical($ip)
{
    // Known prefix
    $v4mapped_prefix_hex = '00000000000000000000ffff';
    $v4mapped_prefix_bin = pack("H*", $v4mapped_prefix_hex);
    // Or more readable when using PHP >= 5.4
    // $v4mapped_prefix_bin = hex2bin($v4mapped_prefix_hex); 

    // Parse
    $addr_bin = inet_pton($ip);
    if( $addr_bin === FALSE ) 
    {
    // Unparsable? How did they connect?!?
    @writeLog(date('Y/m/d H:i:s')." INVALID ON RESOLVING IP:".$ip); 
    }

    // Check prefix
    if( substr($addr_bin, 0, strlen($v4mapped_prefix_bin)) == $v4mapped_prefix_bin)
    {
    // Strip prefix
    $addr_bin = substr($addr_bin, strlen($v4mapped_prefix_bin));
    }
    // Convert back to printable address in canonical form
    $ip = inet_ntop($addr_bin);
return $ip;
}

function getIpAddress(){
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
        if (array_key_exists($key, $_SERVER) === true){
            foreach (explode(',', $_SERVER[$key]) as $ip){
                $ip = trim($ip); // just to be safe
	    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
    	    return $ip;
	    }
            }
        }
    }
@writeLog(date('Y/m/d H:i:s')."RESOLVING IP ERROR"); 
return null;
}

/*
function validateIp($ip) {
    if (filter_var($ip, FILTER_VALIDATE_IP, 
	    FILTER_FLAG_IPV4 | 
	    FILTER_FLAG_IPV6 |
	    FILTER_FLAG_NO_PRIV_RANGE | 
	    FILTER_FLAG_NO_RES_RANGE) === false)
    {
    return false;
    }
    return true;
}
*/

function writeLog($string)
{
$fp = fopen('accesslog1.log', 'a+');
fwrite($fp, $string."\n");
fclose($fp);
}
/* End of support functions */


/* Main functions */
//Show to bots only
function linkMagicBots($destination,$linkName,$params)
{
//$start = microtime(true);
    $ip=null;
    $uAg=$_SERVER['HTTP_USER_AGENT'];
    $ip=trim(getIpAddress());

    if (isBot($uAg,$ip)) echo "<a href=\"".$destination."\" ".$params.">".$linkName."</a>";
//echo microtime(true) - $start;
}

//Show to users only
function linkMagicUsers($destination,$linkName,$params)
{
//$start = microtime(true);
    $ip=null;
    $uAg=$_SERVER['HTTP_USER_AGENT'];
    $ip=trim(getIpAddress());

    if (!isBot($uAg,$ip)) echo "<a href=\"".$destination."\" ".$params.">".$linkName."</a>";
//echo microtime(true) - $start;
}

//Show to users only
function linkMagicUsersImg($destination,$linkName,$params,$imgPath)
{
//$start = microtime(true);
    $ip=null;
    $uAg=$_SERVER['HTTP_USER_AGENT'];
    $ip=trim(getIpAddress());

    if (!isBot($uAg,$ip)) echo "<a href=\"".$destination."\" ".$params."><img src=\"".$imgPath."\" alt=\"".$linkName."\" border=\"0\"></a>";
//echo microtime(true) - $start;
}
?>
<span class="panel33">
  <?php 
    //Try to show to bots only
    LinkMagicBots('http://sibutraminereview.com/','Sibutramine','id="something1" class="something2"');
   
  ?>
</span>
