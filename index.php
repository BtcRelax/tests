<?php
	try{
		echo 'Try init core: ';
		include '../BtcRelax/core.inc';
		$vCore= \BtcRelax\Core::getIstance(false,true);
		if ($vCore instanceof \BtcRelax\Core)
		{
      echo "Ok";
      echo "<br>Try init AM: ";
      $vAM = \BtcRelax\Core::createAM();
      if ($vAM instanceof \BtcRelax\AM) {
        echo "Ok";
      } else { echo "Fail"; }
      echo "<br>Try init OM: ";
      $vOM = \BtcRelax\Core::createOM();
      if ($vOM instanceof \BtcRelax\OM) {
        echo "Ok";
      } else { echo "Fail"; }
    }
	}
	catch(Exception$e){
		echo \sptintf("Error:%s",$e->getMessage());
	}