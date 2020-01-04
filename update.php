<?php

if(isset($_POST['submit'])){


	try{

$query = $this->dbConn->prepare("UPDATE Page SET titulli = :titulli , teksti = :teksti ,image1 = :image1 ,image2 = :image2 ,image3 = :image3,  edited = :edited  WHERE id = :id");
				$query->execute(array(
						"titulli" => $page->getTitulli(),
						"teksti"  => $page->getTeksti(),
						"image1"  => $page->getImage1(),
						"image2"  => $page->getImage2(),
						"image3"  => $page->getImage3(),
						"edited"  => $page->getData(),
						"id" 	  => $page->getId()
					));
			}catch(PDOException $e){
				throw new PageException($e->getMessage());
			}
}
?>