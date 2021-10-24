<?php 
require './admin/db.php';

	$query = '';
	$output = array();
	$query .= "SELECT * FROM poste ";

	if (isset($_POST["search"]["value"])) 
	{
		$query .= 'WHERE title LIKE "%'.$_POST["search"]["value"].'%" ';
	}

	if (isset($_POST["order"])) 
	{
		$query .= 'ORDER BY '.$_POST['order']['0']['column']. ' ' .$_POST['order']['0']['dir']. ' ';
	}
	else
	{
		$query .= 'ORDER BY id DESC ';
	}

	if ($_POST["length"] != -1) 
	{
		$query .= 'LIMIT ' .$_POST['start']. ', ' .$_POST['length'];
	}

	$statement = $connection -> prepare($query);
	$statement -> execute();
	$result = $statement -> fetchAll();
	$data = array();

	$filtered_rows = $statement -> rowCount();

	

	$output = array(
		"draw" 				=> intval($_POST["draw"]),
		"recordsTotal" 		=> $filtered_rows,
		"recordsFiltered" 	=> get_data(),
		"data" 				=> $data
	);

	echo json_encode ($output);

?>