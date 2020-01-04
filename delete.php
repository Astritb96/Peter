<?php
	if(isset($_POST['submit'])){


	try{
				$query = $this->dbConn->prepare("DELETE FROM Page WHERE id = :id");
				$query->bindParam("id" , $id);
				$query->execute();
			}catch(PDOException $e){
				throw new PageException($e->getMessage());
	}
			
?>