<?php
	try{
		echo 'Try init core: ';
		include '../BtcRelax/core.inc';
		$vCore=\BtcRelax\Core::getIstance(false,true);
		if($vCore instanceof \BtcRelax\Core){
			echo "Ok";
			echo "<br>Try init AM: ";
			$vAM=\BtcRelax\Core::createAM();
			if($vAM instanceof \BtcRelax\AM){
				echo "Ok. Can <a href=\"vendor/btcrelax/services-api/scripts/login_as.php\">login as</a>";
			}
			else{
				echo "Fail";
			}
			echo "<br>Try init OM: ";
			$vOM=\BtcRelax\Core::createOM();
			if($vOM instanceof \BtcRelax\OM){
				echo "Ok";
			}
			else{
				echo "Fail";
			}
			echo "<br>Try init RE: ";
			$vRE=\BtcRelax\Core::createRE();
			if($vRE instanceof \BtcRelax\RE){
				echo "Ok";
			}
			else{
				echo "Fail";
			}
			echo "<br>Try init PM: ";
			$vPM=\BtcRelax\Core::createPM();
			if($vPM instanceof \BtcRelax\PM){
				echo "Ok";
			}
			else{
				echo "Fail";
			}

		}
	}
	catch(Exception$e){
		echo \sptintf("Error:%s",$e->getMessage());
	}