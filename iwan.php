<?phperror_reporting(0);include ("function.php");echo "\e            TEMBAK VOCER GOJEK BOSQ Hilmawan ABDU RACHIM & Dina Alfa Rochima             \n";echo "\e SC GOJEK TENBAK VOCER 15+10+5\n";echo "\n";nope:echo "\e[?] Masukkan OTP WAJIB FRESH DAN +62XXX : ";$nope = trim(fgets(STDIN));$cek = cekno($nope);if ($cek == false)    {    echo "\e[x] GA FRESH BANG OTPNYA\n";			goto nope;    }  else    {echo "\e[!] TUNGGU BOSQ.......\n";sleep(5);$register = register($nope);if ($register == false)    {    echo "\e[x] NO LU GA FRESH ANJIR CARI NOMOR FRESH BOSS\n";    }  else    {    otp:    echo "\e[!] MASUKIN SMS BOSQQ(OTP) : ";    $otp = trim(fgets(STDIN));    $verif = verif($otp, $register);    if ($verif == false)        {        echo "\e[x] SALAH COBA LIAT LAGI OTP NYA BRO....\n";        goto otp;        }      else        {	echo "\e[!] Mencoba Claim  Voucher : COBAGOFOOD090320A !\n";        $claim = claim1($verif);        if ($claim == false){            echo "\e[!] DONE SILAHKAN CLAIM SENDIRI\n";			      sleep(3);            echo "\e[!] Mencoba Claim Voucher : COBAINGORIDEPAY !\n";			      goto ride;            }else{                echo "\e[+] ".$claim."\n";				    sleep(3);                echo "\e[!] Mencoba Claim Voucher : COBAGOFOOD090320A !\n";                sleep(3);                goto ride;            }            ride:            $claim = ride($verif);            if ($claim == false){            echo "\e[!] DONE SILAHKAN CLAIM SENDIRI \n";			      sleep(3);            echo "\e[!] Mencoba Claim Voucher :COBAINGORIDE !\n";            sleep(3);            }else{                echo "\e[+] ".$claim."\n";				    sleep(3);                echo "\e[!] Mencoba Claim Voucher : COBAINGORIDEPAY !\n";                sleep(3);                goto pengen;            }            pengen:            $claim = cekvocer($verif);            if ($claim == false ) {            echo "\e[!] DONE SILAHKAN CLAIM SENDIRI \n";           }		  else			{			echo $claim . "\n";			}		}	}}?>