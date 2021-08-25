<?php
error_reporting(0);
session_start();
$vienden="\033[100m";
$viendo="\033[101m";
$vienluc="\033[102m";
$vienvang="\033[103m";
$vienxduong="\033[104m";
$vienhong="\033[105m";
$vienxnhac="\033[106m";
$vientrang="\033[107m";
$maufullxduong= "\e[1;47;34m";
$maufulldo= "\e[1;47;31m";
$maufullluc= "\e[1;47;32m";
$maufullxnhac= "\e[1;47;36m";
$maufullden= "\e[1;47;30m";
$maufullvang= "\e[1;47;33m";
$maufullhong= "\e[1;47;33m";
$denthui="\033[0;30m";
$res="\033[0m";
$do="\033[0;31m";
$grean="\033[1;32m";
$mit="\033[0;32m";
$vang="\033[0;33m";
$mti="\033[0;33m";
$test="\033[1;33m";
$tim="\033[1;36m";
$lam="\033[1;34m";
$tmi="\033[1;34m";
$hong="\033[1;35m";
$imt="\033[1;35m";
$blue="\033[1;36m";
$trang="\033[1;37m";
$ress="\033[0;32m";
$res="\033[0;33m";
$green="\033[0;37m";
$yellow="\033[0;33m";
$white= "\033[0;33m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$banner="\r\n";
$ngay=date("d/m");
$day=date("d/m");
$BBlack="\033[1;30m";      
$BRed="\033[1;31m";
$BGreen="\033[1;32m";
$BYellow="\033[1;33m";
$BBlue="\033[1;34m";
$BPurple="\033[1;35m";
$BCyan="\033[1;36m";
$BWhite="\033[1;37m";
$Blue="\033[0;34m";
$res="\033[0m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$banner="\r    
@system('clear');
echo $banner;
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
} 
           \033[1;91m░██████╗██╗░░██╗░█████╗░██╗░░██╗░█████╗░░██████╗░
           \033[1;92m██╔════╝██║░░██║██╔══██╗██║░░██║██╔══██╗██╔════╝░
           \033[1;93m╚█████╗░███████║██║░░██║███████║███████║██║░░██╗░
           \033[1;94m░╚═══██╗██╔══██║██║░░██║██╔══██║██╔══██║██║░░╚██╗
           \033[1;95m██████╔╝██║░░██║╚█████╔╝██║░░██║██║░░██║╚██████╔╝
           \033[1;96m╚═════╝░╚═╝░░╚═╝░╚════╝░╚═╝░░╚═╝╚═╝░░╚═╝░╚═════╝░
\n";                        
$ngay = date("d");
$thang = date("m");
$nam = date("Y");
@system('clear');
echo $banner;
$useragent="Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Kiwi Chrome/68.0.3438.0 Safari/537.36";
for ($makep=35;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$luc." DATE     :- $vang$ngay - $luc$thang - $hong$nam\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$yellow." Admin    :- SHOHAG AHSAN JOY\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$xduong." Facebook :- Shohag.ahsan.joy.official\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$cyan." Github   :- Shohagahsanjoy\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$red." Youtube  :- ".$bluelight."Techno Boyツ\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$white." Contact  :- ".$bluelight."01701041925\n";
for ($makep=35;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
$_SESSION['fck'] = file_exists("TTC.txt");
if ($_SESSION['fck'] == '1'){
  unlink("TTC.txt");
}
$_SESSION['check'] = file_exists("logttc.txt");
if ($_SESSION['check'] =='1'){
echo  $yellow." ➻❥ " .$white. "You Signed In $cyan Tương Tác Chéo $white Before. Press $cyan Enter $white To Continue, $white ➻❥ Or Type  $red No $white To Login New Account⊱ ";
$_SESSION['nhap'] = trim(fgets(STDIN));
if ($_SESSION['nhap'] !='no' and $_SESSION['nhap'] != 'No' and $_SESSION['nhap'] !=''){
echo $white." ➻❥ ".$red."Sai Định Dạng\n";
exit;
}
if ($_SESSION['nhap'] =='no' or $_SESSION['nhap'] =='No'){
$my = fopen("logttc.txt", "w+");
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Input User Name Of TTC\e[0m\e[1;95m]
└──╼ \e[1;39mN\e[1;36mT\e[1;91mL : $vang ";
$username =trim(fgets(STDIN));
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Input Password For TTC\e[0m\e[1;95m]
└──╼ \e[1;39mN\e[1;36mT\e[1;91mL : $vang ";
$password =trim(fgets(STDIN));
$arr = array("username"=> $username, "password"=> $password);
fwrite($my,json_encode($arr));
    $my = file("logttc.txt");
$bb = file_get_contents('logttc.txt');
$cc =json_decode($bb);
$_SESSION['username']= $cc->{"username"};
$_SESSION['password']= $cc->{"password"};
}
if ($_SESSION['nhap'] == ''){
$bb = file_get_contents("logttc.txt");
$cc =json_decode($bb);
$_SESSION['username']= $cc->{"username"};
$_SESSION['password']= $cc->{"password"};
}
} else {
$my = fopen("logttc.txt","w+");
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Input User Name Of TTC\e[0m\e[1;95m]
└──╼ \e[1;39mN\e[1;36mT\e[1;91mL : $vang ";
$_SESSION["username"]=trim(fgets(STDIN));
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Input User Passwprd Of TTC\e[0m\e[1;95m]
└──╼ \e[1;39mN\e[1;36mT\e[1;91mL : $vang ";
$_SESSION['password']=trim(fgets(STDIN));
$arr = array("username"=> $_SESSION["username"], "password"=> $_SESSION['password']);
fwrite($my,json_encode($arr));
}
$user = $_SESSION['username'];
$pass = $_SESSION['password'];
$source = getcookiettc($user,$pass,$useragent);
$sou= strlen($source);
if ($sou < 10 ){
  echo $white." ➻❥ ".$green." Logged in successfully\n";
  // get xu
  $url = "https://tuongtaccheo.com/home.php";
  $curl = curl_init();
  curl_setopt_array($curl, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_COOKIEFILE => "TTC.txt"
  ));
  $data = curl_exec($curl);
  curl_close($curl);
  preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
  $xu = $sd["1"];
}else{
	echo $white." ➻❥ ".$red."Wrong Account or Password TTC\n";
	exit; 
}
@system('clear');
echo $banner;
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$luc." DATE     :- $vang$ngay - $luc$thang - $hong$nam\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$yellow." Admin    :- SHOHAG AHSAN JOY\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$yellow." Facebook :- Shohag.ahsan.joy.official\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$cyan." Github   :- Shohagahsanjoy\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$red." Youtube  :- ".$bluelight."Techno Boyツ\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$white." Contact  :- ".$bluelight."01701041925\n";
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
if ($chedo == 5 or $chedo == 7){
  $luong =1;
}else {
  choose:
  echo "\n";
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Enter Nick (ID) Number Want To Run\e[0m\e[1;95m]
└──╼ \e[1;39mN\e[1;36mT\e[1;91mL : $vang ";
$luong=trim(fgets(STDIN));
if ($luong<1 || $luong >20){
  echo $red."\033[1;37m~\033[1;31m At least 1 and at most 20\n";
  GOTO choose;
  }
}
$c=1;$thu=1;
$mangcookie =[];
if ($chedo<7){
for($b=1;$b<=$luong;$b++){
    echo "\e[1;95m┌─[\e[1;37m\e[1;42m Enter Cookies $thu\e[0m\e[1;95m]
└──╼ \e[1;39mN\e[1;36mT\e[1;91mL : $vang ";
    $cooki[$c]=trim(fgets(STDIN));
    $ch=curl_init();
    $cookie=$cooki[$c];
$access = cookie($cookie,$useragent);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0])
{
        array_push($mangcookie,$cookie);
	             $c++;
	            $thu++;
}else{echo $white." ⛔ ".$red."Cookie is dead, try again \n";$b--;}
}
}else{
  for($b=1;$b<=$luong;$b++){
    echo $white." + ".$green."Input Token FB ".$thu.":$green ";
    $cooki[$c]=trim(fgets(STDIN));
    $ch=curl_init();
    $cookie=$cooki[$c];
$access_token = $cookie;
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
array_push($mangcookie,$cookie);
	             $c++;
	            $thu++;
}else{
  echo $white." ⛔ ".$red."Token is dead, try again\n";$b--;}
} 
}
@system('clear');
echo $banner;
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$luc." DATE     :- $vang$ngay - $luc$thang - $hong$nam\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$yellow." Admin    :- SHOHAG AHSAN JOY\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$xduong." Facebook :- Shohag.ahsan.joy.official\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$cyan." Github   :- Shohagahsanjoy\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$red." Youtube  :- ".$bluelight."Techno Boyツ\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$white." Contact  :- ".$bluelight."01701041925\n";
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Account TTC: ".$vang.$user."\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Current Coins (xu): ".$vang.$xu."\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Using: ".$vang.$luong."\033[1;32m Fb Runningツ \n";
$listnv = [];
  Job:
echo $do."[".$luc."✔".$do."] ".$trang."=> ".$luc."Enable Follow Mode$luc (y/n) : $vang";
  $chon1=trim(fgets(STDIN));
  if ($chon1 == 'y' or $chon1 == 'Y'){
    array_push($listnv,'sub');
  }
echo $do."[".$luc."✔".$do."] ".$trang."=> ".$luc."Enable Like Mode$luc (y/n) : $vang";
  $chon2=trim(fgets(STDIN));
  if ($chon2 == 'y' or $chon2 == 'Y'){
    array_push($listnv,'like');
  }
  echo $do."[".$luc."✔".$do."] ".$trang."=> ".$luc."Enable Comment Mode$luc (y/n) : $vang";
  $chon3=trim(fgets(STDIN));
  if ($chon3 == 'y' or $chon3 == 'Y'){
    array_push($listnv,'cmt');
  }
  if ($chdo <7){
echo $do."[".$luc."✔".$do."] ".$trang."=> ".$luc."Enable Page Like Mode$luc (y/n) : $vang";
  $chon4=trim(fgets(STDIN));
  if ($chon4 == 'y' or $chon4 == 'Y'){
    array_push($listnv,'page');
  }
echo $do."[".$luc."✔".$do."] ".$trang."=> ".$luc."Enable React Mode$luc (y/n) : $vang";
  $chon5=trim(fgets(STDIN));
  if ($chon5 == 'y' or $chon5 == 'Y'){
    array_push($listnv,'cx');
  }
}
  if (count($listnv) == 0){exit($red."You Have Not Selected Any Tasks\n");}
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Enter Mission Time : $vang"; 
    $timedelay=trim(fgets(STDIN));
  if($timedelay < 1)
    {exit($red."Ít Nhất 1 Giây\n");}
usleep(200000);
if($luong==1){
  nhiemvu:
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Anti-Block After Several Missions: $vang"; 
} else{
$dl = 150;
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Total Work : $vang"; 
}
$doi=trim(fgets(STDIN));
if ($doi<1){
  echo $red."\033[1;37m~\033[1;31m Invalid selection !\n";
  GOTO nhiemvu;
}
if($luong==1){
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Stop Time How Many Seconds : $vang"; 
  $dl=trim(fgets(STDIN));
}
sleep(1);
for($i=0; $i<=15; $i++){
echo "\033[1;31m─ ";
usleep(20000);
echo "\033[1;37m─ ";
usleep(20000);
}
echo "\n";
$q=1;
while ($o <= $_SESSION['i']){
for($l=0;$l<count($mangcookie);$l++){
$cookie = $mangcookie[$l];
if ($chedo < 7){
$access = cookie($cookie,$useragent);
$access_token = explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
}else{
  $access_token = $cookie;
}
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
  $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};
  $tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'};
}else{
  echo "                                     \r";
  echo $white." ⛔ ".$red."Cookie Die\n";
  array_splice($mangcookie,$l,1);
}
$h = datnick($idfb,$useragent);
if ($h == '1'){
echo "                                                    \r";
echo $white." ➻❥ ".$green."Configuration $yellow".$tenfb."\n";
        $i=1;
        $max=0;
while($i<10){
  $rand = $listnv[array_rand($listnv,1)];
  if ($rand == 'like'){
    $loai = 'like';
    $list = getlike($useragent);
    $check = count($list);
    if($check==0){
      echo "                                                      \r";
     echo $white." ➻❥ ".$red."Temporarily Out of Mission Like\r";
    }
    foreach ($list  as $id) {
    $id = $id[("idpost")];
    $g = like($access_token,$id,$cookie);
    if ($g->{'error'}->{'code'} == 368){
          echo "                                                      \r";
          echo $white." ➻❥ ".$red."Has Been Blocked\n";
          array_splice($mangcookie,$l,1);
            $m = 1;
            break;
    }
    if ($g->{'error'}->{'code'} == 190){
            	echo "                                                      \r";
            echo $white." ➻❥ ".$red."FB Version Expired\n";
            array_splice($mangcookie,$l,1);
            $m = 1;
            break;
    }
    $ck = nhantienlike($id,$useragent);
	$s= strlen($ck[("mess")]);
	if ($s > 2){
	  $t = random_int(31,37);
      $mau = "\e[1;$t"."m";
      $max=$max+1;
      $stt=$stt+1;
      $xu = getxu();
      echo "\r";
      echo "                                              \r";
      echo $yellow."[$stt]".$red." ● ".$cyan;
      echo date("H:i:s");
      echo $red." ●$mau ➻❥LIKEツ$red ● $white";
      echo $id."$red ●$cyan 300+$red ● $yellow";
      echo $xu." xu\n";
    loadtime($timedelay);
      if ($max==$doi){
           $max=0;
           break;
          }
    } // nhận tiền
    } // foreach
    
    if($check!=0){
    if($max==0){
          if(count($mangcookie)==1){
          echo "                                                      \r";
           for($j = $dl;$j> 0;$j--){
             echo $green."Waiting for Delay Avoid Block$yellow $j sec";
             sleep(1);
             echo "\r";
           }
          }else{
          break;}
        }
        if($m==1){
      $m=0;
      break; 
    }
    }
  }
  if ($rand == 'sub'){
    $loai = 'sub';
    $list = getnv($loai,$useragent);
    $check = count($list);
    if($check==0){
      echo "                                                      \r";
     echo $white." ➻❥ ".$red."Temporarily Out of Mission Follow\r";
    }
    foreach ($list  as $id) {
    $id = $id[("idpost")];
    $g = follow($access_token,$id,$cookie);
    if ($g->{'error'}->{'code'} == 368){
        echo "                                                      \r";
         echo $white." ➻❥ ".$red."Has Been Blocked\n";
         array_splice($mangcookie,$l,1);
           $m = 1;
           break;
   }
    if ($g->{'error'}->{'code'} == 190){
            	echo "                                                      \r";
            echo $white." ➻❥ ".$red."FB Version Expired\n";
            array_splice($mangcookie,$l,1);
            $m = 1;
            break;
    }
    $ck = hoanthanhsub($id);
	$s= strlen($ck[("mess")]);
	if ($s > 29){
	  $t = random_int(31,37);
      $mau = "\e[1;$t"."m";
      $max=$max+1;
      $stt=$stt+1;
      $xu = getxu();
      echo "\r";
      echo "                                              \r";
      echo $yellow."[$stt]".$red." ● ".$cyan;
      echo date("H:i:s");
      echo $red." ●$mau ➻❥FOLLOWツ$red ● $white";
      echo $id."$red ●$cyan 600+$red ● $yellow";
      echo $xu." xu\n";
      loadtime($timedelay);
      if ($max==$doi){
           $max=0;
           break;
          }
    } // nhận tiền
    } // foreach
  
    if($check!=0){
    if($max==0){
          if(count($mangcookie)==1){
          echo "                                                      \r";
           for($j = $dl;$j> 0;$j--){
             echo $green."Waiting for Delay Avoid Block$yellow $j sec";
             sleep(1);
             echo "\r";
           }
          }else{
          break;}
        }  
    if($m==1){
      $m=0;
      break; 
    }
  
    }
  }
  if ($rand == 'cmt'){
    $loai = 'cmt';
    $list = getnv($loai,$useragent);
    $check = count($list);
    if($check==0){
      echo "                                                      \r";
     echo $white." ➻❥ ".$red."Temporarily Out of Mission Comment\r";
    }
    foreach ($list  as $id => $key) {
    $uid = $key[("idpost")];
    $ms = json_decode($key[("nd")]);
		$msg = $ms[1];
    $g = cmt($access_token,$uid,$cookie,$msg);
    if ($g->{'error'}->{'code'} == 368){
          echo "                                                      \r";
          echo $white." ➻❥ ".$red."Has Been Blocked\n";
          array_splice($mangcookie,$l,1);
            $m = 1;
            break;
    }
    if ($g->{'error'}->{'code'} == 190){
            	echo "                                                      \r";
            echo $white." ➻❥ ".$red."FB Version Expired\n";
            array_splice($mangcookie,$l,1);
            $m = 1;
            break;
    }
  $ck = hoanthanhcmt($uid);
  $s= strlen($ck[("mess")]);
	if ($s > 29){
	  $t = random_int(31,37);
      $mau = "\e[1;$t"."m";
      $max=$max+1;
      $stt=$stt+1;
      $xu = getxu();
      echo "\r";
      echo "                                              \r";
      echo $yellow."[$stt]".$red." ● ".$cyan;
      echo date("H:i:s");
      echo $red." ●$mau ➻❥CMTツ$red ● $white";
      echo $uid."$red ●$cyan 600+$red ● $yellow";
      echo $xu." xu\n";
      loadtime($timedelay);
      if ($max==$doi){
           $max=0;
           break;
          }
    } // nhận tiền
    } // foreach
    
    if($check!=0){
    if($max==0){
          if(count($mangcookie)==1){
          echo "                                                    \r";
           for($j = $dl;$j> 0;$j--){
             echo $green."Waiting for Delay Avoid Block$yellow $j sec";
             sleep(1);
             echo "\r";
           }
          }else{
          break;}
        } 
        if($m==1){
      $m=0;
      break; 
    }
    }
  }
  if ($rand == 'page'){
    $loai ='likepage';
	$list = getnv($loai,$useragent);
    $check = count($list);
    if($check==0){
      echo "                                                      \r";
     echo $white." ➻❥ ".$red."Temporarily Out of Mission Like Page\r";
    }
    foreach ($list  as $id) {
    $id = $id[("idpost")];
    $g = page($id,$cookie);
    if ($g->{'error'}->{'code'} == 190){
            	echo "                                                      \r";
            echo $white." ➻❥ ".$red."FB Version Expired\n";
            array_splice($mangcookie,$l,1);
            $m = 1;
            break;
    }
    $ck = nhantien($loai,$id,$useragent);
	$s= strlen($ck[("mess")]);
	if ($s > 2){
	  $t = random_int(31,37);
      $mau = "\e[1;$t"."m";
      $max=$max+1;
      $stt=$stt+1;
      $xu = getxu();
      echo "\r";
      echo "                                              \r";
      echo $yellow."[$stt]".$red."$hong➻❥[Shohag] ● ".$cyan;
      echo date("H:i:s");
      echo $red." ●$mau ➻❥PAGEツ$red ● $white";
      echo $id."$red ●$cyan 700+$red ● $yellow";
      echo $xu." xu\n";
      loadtime($timedelay);
      if ($max==$doi){
           $max=0;
           break;
          }
    } // nhận tiền
    } // foreach
    
    if($check!=0){
    if($max==0){
          if(count($mangcookie)==1){
          echo "                                                    \r";
           for($j = $dl;$j> 0;$j--){
             echo $green."Waiting for Delay Avoid Block$yellow $j sec";
             sleep(1);
             echo "\r";
           }
          }else{
          break;}
        } 
        if($m==1){
      $m=0;
      break; 
    }
    }
  }
  if ($rand == 'cx'){
    $loai = 'camxuc';
    $list = getnv($loai,$useragent);
    $check = count($list);
    if($check==0){
      echo "                                                      \r";
     echo $white." ➻❥ ".$red."Temporarily Out of Mission Reaction\r";
    }
    foreach ($list  as $id => $key) {
    $id = $key[("idpost")];
	  $type = $key[("loaicx")];
    $g = camxuc($id,$type,$cookie);
    if ($g->{'error'}->{'code'} == 368){
          echo "                                                      \r";
          echo $white." ➻❥ ".$red."Has Been Blocked\n";
          array_splice($mangcookie,$l,1);
            $m = 1;
            break;
    }
    if ($g->{'error'}->{'code'} == 190){
            	echo "                                                      \r";
            echo $white." ➻❥ ".$red."FB Version Expired\n";
            array_splice($mangcookie,$l,1);
            $m = 1;
            break;
    }
   $ck = hoanthanh($type,$id);
   $xu2 = getxu();
   
    if ($xu2 != $xu){
      $max=$max+1;
      $stt=$stt+1;
      $xu = $xu2;
      $t = random_int(31,37);
    $mau = "\e[1;$t"."m";
    echo "\r";
      echo "                                              \r";
      echo $yellow."[$stt]".$red." ● ".$cyan;
      echo date("H:i:s");
      echo $red." ●$mau➻❥ $type"."ツ$red ● $white";
      echo $id."$red ●$cyan 400+$red ● $yellow";
      echo $xu." xu\n";
      loadtime($timedelay);
      if ($max==$doi){
           $max=0;
           break;
          }
    } // nhận tiền
    } // foreach
    
    if($check!=0){
    if($max==0){
          if(count($mangcookie)==1){
          echo "                                                    \r";
           for($j = $dl;$j> 0;$j--){
             echo $green."Waiting for Delay Avoid Block$yellow $j sec";
             sleep(1);
             echo "\r";
           }
          }else{
          break;}
        }  
      if($m==1){
      $m=0;
      break; 
    }
    }
  }
  
} //vòng while trong

} //vòng cấu hình
} // vòng for
if (count($mangcookie)==1 && empty($dl)){
  echo $white." ➻❥ ".$green."How Many Seconds Stop Resting: ";
  $dl=trim(fgets(STDIN));
}
if (count($mangcookie)==0){
echo $white." ➻❥ ".$green."All FB Expires\n";
echo $white." ➻❥ ".$green."Enter Facebook Acc Number: ";
$luong=trim(fgets(STDIN));
if ($luong<1){exit($red."Enter Wrong Format\n");}
$c=1;$thu=1;
if ($chdo<7){
for($b=1;$b<=$luong;$b++){
    echo $white." ➻❥ ".$yellow."Enter Cookies ".$thu.":$white ";
    $cooki[$c]=trim(fgets(STDIN));
    $ch=curl_init();
    $cookie=$cooki[$c];
$access = cookie($cookie,$useragent);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0])
{
        echo $white." ➻❥ ".$green."Cookie Hợp Lệ\n";
        array_push($mangcookie,$cookie);
	             $c++;
	            $thu++;
}else{echo $white." ➻❥ ".$red."Invalid Cookie\n";$b--;}
}
}else{
  for($b=1;$b<=$luong;$b++){
    echo $white." ➻❥ ".$yellow."Enter FB Token ".$thu.":$white ";
    $cooki[$c]=trim(fgets(STDIN));
    $ch=curl_init();
    $cookie=$cooki[$c];
$access_token = $cookie;
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
  echo $white." ➻❥ ".$green."Token Union\n";
        array_push($mangcookie,$cookie);
	             $c++;
	            $thu++;
}else{
  echo $white." ➻❥ ".$red."Invalid Token\n";$b--;
}
} 
}
if (count($mangcookie)==1 && empty($dl)){
  echo $white." ➻❥ ".$green."After How Many Missions Stop Avoiding Block ";
  $doi=trim(fgets(STDIN));
  echo $white." ➻❥ ".$green."How Many Seconds Stops: ";
  $dl=trim(fgets(STDIN));
}
} // die hết cookie
} // vòng while 



function cookie($cookie,$useragent){
$ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "authority: m.facebook.com";
$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
$head[] = "cache-control: max-age=0";
$head[] = "upgrade-insecure-requests: 1";
$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$head[] = "sec-fetch-site: none";
$head[] = "sec-fetch-mode: navigate";
$head[] = "sec-fetch-user: ?1";
$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_USERAGENT,$useragent );
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
return $access;
}
function follow($access_token,$id,$cookie){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/subscribers');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function like($access_token,$id,$cookie){
  $ch=curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
  $head[] = "Connection: keep-alive";
  $head[] = "Keep-Alive: 300";
  $head[] = "authority: m.facebook.com";
  $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
  $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
  $head[] = "cache-control: max-age=0";
  $head[] = "upgrade-insecure-requests: 1";
  $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
  $head[] = "sec-fetch-site: none";
  $head[] = "sec-fetch-mode: navigate";
  $head[] = "sec-fetch-user: ?1";
  $head[] = "sec-fetch-dest: document";
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
  curl_setopt($ch, CURLOPT_ENCODING, '');
  curl_setopt($ch, CURLOPT_COOKIE, $cookie);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
  $data = array('access_token' => $access_token);
  curl_setopt($ch, CURLOPT_POST,count($data));
  curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
  $access = curl_exec($ch);
  curl_close($ch);
  return json_decode($access);
}
function cmt($access_token,$id,$cookie,$msg){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/comments');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site:";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('message' => $msg,'access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function page($id,$cookie){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
	$page = curl_exec($ch);
	if (explode('&amp;refid=',explode('pageSuggestionsOnLiking=1&amp;gfid=',$page)[1])[0]){
		$get = explode('&amp;refid=',explode('pageSuggestionsOnLiking=1&amp;gfid=',$page)[1])[0];
		$link = 'https://mbasic.facebook.com/a/profile.php?fan&id='.$id.'&origin=page_profile&pageSuggestionsOnLiking=1&gfid='.$get.'&refid=17';
		curl_setopt($ch, CURLOPT_URL, $link);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_exec($ch);
	}	
	curl_close($ch);

}
function camxuc($id,$type,$cookie){
	$ch = curl_init();
	if(strpos($id,'_')){
		$uid = explode('_',$id, 2);
		$id2 = 'story.php?story_fbid='.$uid[1].'&id='.$uid[0];
	}else{
		$id2 = $id;
	}
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id2);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
	$page = curl_exec($ch);
	if ($id2 != $id && explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0]){
		$get = explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0];
	}else{
		$get = $id2;
	}
	$link = 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id='.$get;
	curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$cx = curl_exec($ch);
	$haha = explode('<a href="',$cx);
	if ($type == 'LOVE'){
		$haha2 = explode('" style="display:block"',$haha[2])[0];
	}else if ($type == 'WOW'){
		$haha2 = explode('" style="display:block"',$haha[5])[0];
	}else if ($type == 'CARE'){
		$haha2 = explode('" style="display:block"',$haha[3])[0];
	}else if ($type == 'HAHA'){
		$haha2 = explode('" style="display:block"',$haha[4])[0];
	}else if ($type == 'SAD'){
		$haha2 = explode('" style="display:block"',$haha[6])[0];
	}else{
		$haha2 = explode('" style="display:block"',$haha[7])[0];
	}
	$link2 = html_entity_decode($haha2);	

	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com'.$link2);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_exec($ch);
	curl_close($ch);
}
function loadtime($time){
    for ( $x = $time; $x--; $x ) {
       echo "                                                      \r";
       echo "\e[1;32m● Please wait <~> \e[1;37m〘\e[1;31mShohag-Ahsan-joy〙".$x." \e[1;33m sec";
       usleep(185000);
       echo "\r";
       echo "                                                      \r";
       echo "\e[1;36m● Please wait <~> \e[1;37m〘\e[1;33mShohag-Ahsan-joy〙".$x."\e[1;34m sec";
       usleep(185000);
       echo "\r";
       echo "                                                      \r";
       echo "\e[1;34m● Please wait <~> \e[1;37m〘\e[1;34mShohag-Ahsan-joy〙".$x."\e[1;31m sec";
       usleep(185000);
       echo "\r";
       echo "                                                      \r";
       echo "\e[1;33m● Please wait <~> \e[1;37m〘\e[1;35mShohag-Ahsan-joy〙".$x."\e[1;32m sec";
       usleep(185000);
       echo "\r";
       echo "                                                      \r";
       echo "\e[1;35m● Please wait <~> \e[1;37m〘\e[1;33mShohag-Ahsan-joy〙".$x."\e[1;36m sec";
       usleep(185000);
       echo "\r";
      
}}
function loadcmt($time){
    for ( $x = $time; $x--; $x ) {
       echo "                                                      \r";
       echo "\e[1;32m● Please wait <~> \e[1;37m〘\e[1;31mShohag-Ahsan-joy〙".$x."\e[1;33m sec";
       usleep(185000);
       echo "\r";
       echo "                                                      \r";
       echo "\e[1;36m● Please wait <~> \e[1;37m〘\e[1;33mShohag-Ahsan-joy〙".$x."\e[1;34m sec";
       usleep(185000);
       echo "\r";
       echo "                                                      \r";
       echo "\e[1;34m● Please wait <~> \e[1;37m〘\e[1;34mShohag-Ahsan-joy〙".$x."\e[1;31m sec";
       usleep(185000);
       echo "\r";
       echo "                                                      \r";
       echo "\e[1;33m● Please wait <~> \e[1;37m〘\e[1;35mShohag-Ahsan-joy〙".$x."\e[1;32m sec";
       usleep(185000);
       echo "\r";
       echo "                                                      \r";
       echo "\e[1;35m● Please wait <~> \e[1;37m〘\e[1;33mShohag-Ahsan-joy〙".$x."\e[1;36m sec";
       usleep(185000);
       echo "\r";
      
}}
function getcookiettc($user,$pass,$useragent){
  $ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/login.php');
curl_setopt($ch, CURLOPT_COOKIEJAR, "TTC.txt");
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
$login =array('username' => $user,'password' => $pass,'submit' => ' ĐĂNG NHẬP');
curl_setopt($ch, CURLOPT_POST,count($login));
curl_setopt($ch, CURLOPT_POSTFIELDS,$login);
curl_setopt($ch, CURLOPT_COOKIEFILE, "TTC.txt");
$source=curl_exec($ch);
curl_close($ch);
if(strlen($source) < 10){
$xu = file_get_contents("http://tttoriginal.tk/api/getxu.php?user=$user&pass=$pass");
}
return $source;
}
function datnick($idfb,$useragent){
$dat=http_build_query(array('iddat[]'=> $idfb, 'loai'=>'fb'));
$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL,'https://tuongtaccheo.com/cauhinh/datnick.php');
	$head[]='Host: tuongtaccheo.com';
	$head[]='content-length: '.strlen($dat);
	$head[]='accept: */*';
	$head[]='origin: https://tuongtaccheo.clm';
	$head[]='x-requested-with: XMLHttpRequest';
	$head[]='save-data: on';
	$head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
	$head[]='referer: https://tuongtaccheo.com/cauhinh/index.php';
	$head[]='accept-language: vi-VN, vi;q=0.9,fr-FR;q=0.8,fr;q=0.7, en-US;q=0.6,en;q=0.5,zh-CN;q=0.4.zh;q=0.3';
	$head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$dat);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch,CURLOPT_COOKIEFILE,"TTC.txt");
	$h = curl_exec($ch);
	curl_close($ch);
	return $h;
}
function getlike($useragent){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,'https://tuongtaccheo.com/kiemtien/getpost.php');
 $head[]='Host: tuongtaccheo.com';
 $head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
 $head[]='x-requested-with: XMLHttpRequest';
 $head[]='referer: https://tuongtaccheo.com/kiemtien/';
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_HTTPGET, true);
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch,CURLOPT_ENCODING, TRUE);
 curl_setopt($ch,CURLOPT_COOKIEFILE, "TTC.txt");
 return json_decode(curl_exec($ch),true);
 curl_close($ch);
}
function getnv($loai,$useragent){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,'https://tuongtaccheo.com/kiemtien/'.$loai.'cheo/getpost.php');
 $head[]='Host: tuongtaccheo.com';
 $head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
 $head[]='x-requested-with: XMLHttpRequest';
 $head[]='user-agent: Mozilla/5.0 (Linux; Android 5.1.1; SM-J320G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36';
 $head[]='referer: https://tuongtaccheo.com/kiemtien/'.$loai.'cheo';
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_HTTPGET, true);
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch,CURLOPT_ENCODING, TRUE);
 curl_setopt($ch,CURLOPT_COOKIEFILE, "TTC.txt");
 return json_decode(curl_exec($ch),true);
 curl_close($ch);
}
function nhantienlike($id,$useragent){
  $ch= curl_init();
  $data= ('id=').$id;
  curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/kiemtien/nhantien.php');
  $head[]='Host: tuongtaccheo.com';
  $head[]='content-length: '.strlen($data);
  $head[]='x-requested-with: XMLHttpRequest';
  $head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
  $head[]='origin: https://tuongtaccheo.com';
  $head[]='referer: https://tuongtaccheo.com/kiemtien/';
  $head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch,CURLOPT_USERAGENT, $useragent);
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch,CURLOPT_COOKIEFILE,"TTC.txt");
  $xu= json_decode(curl_exec($ch), true);
  curl_close($ch);
  return $xu;
}
function nhantien($loai,$id,$useragent){
  $ch= curl_init();
  $data= ('id=').$id;
  curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/kiemtien/'.$loai.'cheo/nhantien.php');
  $head[]='Host: tuongtaccheo.com';
  $head[]='content-length: '.strlen($data);
  $head[]='x-requested-with: XMLHttpRequest';
  $head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
  $head[]='origin: https://tuongtaccheo.com';
  $head[]='referer: https://tuongtaccheo.com/kiemtien/'.$loai.'cheo/';
  $head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch,CURLOPT_COOKIEFILE,"TTC.txt");
  $xu= json_decode(curl_exec($ch), true);
  curl_close($ch);
  return $xu;
}
function hoanthanh($type,$id)
{
    $url  = "https://tuongtaccheo.com/kiemtien/camxuccheo/nhantien.php";
    $data= 'id='.$id.'&loaicx='.$type;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/camxuccheo/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_COOKIEFILE => "TTC.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}
function getxu(){
  $url = "https://tuongtaccheo.com/home.php";
  $curl = curl_init();
  curl_setopt_array($curl, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_COOKIEFILE => "TTC.txt"
  ));
  $data = curl_exec($curl);
  curl_close($curl);
  preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
  $xu = $sd["1"];
  return $xu; 
}
function hoanthanhcmt($id)
{
    $url  = "https://tuongtaccheo.com/kiemtien/cmtcheo/nhantien.php";
    $data= ('id=').$id;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/cmtcheo/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "TTC.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}
function hoanthanhsub($id)
{
    $url  = "https://tuongtaccheo.com/kiemtien/subcheo/nhantien.php";
    $data= ('id=').$id;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/cmtcheo/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "TTC.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}