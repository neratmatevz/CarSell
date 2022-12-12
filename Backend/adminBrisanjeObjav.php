<?php
include('db.php');

if (isset($_GET['delete']))
		{
			$id = $_GET['id'];
			$poizvedba = $povezava->prepare("DELETE FROM objava WHERE idObjava=:id");
            $poizvedba->bindValue(":id",$id);
            $poizvedba->execute();
		}
?>