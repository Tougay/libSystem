<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM category WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Catégorie supprimée avec succès';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = "Sélectionnez l'élément à supprimer en premier";
	}

	header('location: category.php');
	
?>