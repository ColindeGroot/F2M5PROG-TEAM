<?php

function getUsers() {
	$connection = dbConnect();
	$sql        = "SELECT * FROM `gebruikers`";
	$statement  = $connection->query( $sql );
	return $statement->fetchAll();
}

function getUser($gebruikersnaam) {
	$connection = dbConnect();
	$sql        = "SELECT * FROM `gebruikers` WHERE gebruikersnaam = :gebruikersnaam";

	$statement	= $connection->prepare($sql);
	$statement->execute(
		[
			'gebruikersnaam' => $gebruikersnaam
		]
	);

	return $statement->fetch();
}

function addUser($gebruikersnaam, $email, $wachtwoord) {
	$connection = dbConnect();
    $sql = "INSERT INTO `gebruikers` (`id`, `gebruikersnaam`, `email`, `wachtwoord`) VALUES (NULL, :gebruikersnaam, :email, :wachtwoord);";
	$statement = $connection->prepare($sql);
	
    return $statement->execute([
        'gebruikersnaam' => $gebruikersnaam,
        'email' => $email,
        'wachtwoord' => $wachtwoord
	]);

}

function updateUser($newId, $newUsername, $newEmail) {
	$connection = dbConnect();
	$sql = "UPDATE `gebruikers` SET `gebruikersnaam` = :new_username, `email` = :new_email WHERE `gebruikers`.`id` = :new_id;";
	$statement = $connection->prepare($sql);

	return $statement->execute([
		'new_username' => $newUsername,
		'new_email' => $newEmail,
		'new_id' => $newId  
	]);

}

//users verwijderen
function delUser($userToDelete) {
	$connection = dbConnect();
    $sql = "DELETE FROM `gebruikers` WHERE `gebruikers`.`id` = :usertodelete";
	$statement = $connection->prepare($sql);
	
    return $statement->execute([
        'usertodelete' => $userToDelete
    ]);
}

function getUserByGebruikersnaam($gebruikersnaam)
{
	$connection = dbConnect();
	$sql = "SELECT * FROM `gebruikers` WHERE gebruikersnaam =  :gebruikersnaam";
	$statement = $connection->prepare($sql);
	$result = $statement->execute(['gebruikersnaam' => $gebruikersnaam]);

	if ($statement->rowCount() === 1) {
		return $statement->fetch();
	}

	return false;
}

function getAllPosts()
{
	$connection = dbConnect();
	$sql = "SELECT `posts`.*, `afbeeldingen`.`bestandsnaam` 
	FROM `posts` 
	LEFT JOIN `afbeeldingen` 
	ON `afbeeldingen`.`id` = `posts`.`afbeelding_id`
	ORDER BY `posts`.`onderwerp` ASC";
	
	$statement = $connection->query($sql);

	return $statement->fetchAll();
}

function maakAfbeelding($newBestandsnaam, $orgBestandsnaam)
{
	$connection = dbConnect();
	$sql = "INSERT INTO `afbeeldingen` (`bestandsnaam`,`originele_bestandsnaam`) VALUES (:bestandsnaam, :originele_bestandsnaam)";
	$statement = $connection->prepare($sql);
	$params = [
		'bestandsnaam' => $newBestandsnaam,
		'originele_bestandsnaam' => $orgBestandsnaam
	];
	$statement->execute($params);

	return $connection->lastInsertId();
}

function maakBericht($onderwerp, $beschrijving, $afbeelding_id, $gebruiker)
{
	$connection = dbConnect();
	$sql = "INSERT INTO `posts` (`onderwerp`,`beschrijving`, `afbeelding_id`, `gebruiker`) VALUES (:onderwerp, :beschrijving, :afbeelding_id, :gebruiker)";
	$statement = $connection->prepare($sql);
	$params = [
		'onderwerp' => $onderwerp,
		'beschrijving' => $beschrijving,
		'afbeelding_id' => $afbeelding_id,
		'gebruiker' => $gebruiker
	];
	$statement->execute($params);
}