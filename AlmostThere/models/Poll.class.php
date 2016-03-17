<?php
//code voor models/Poll.class.php
class Poll 
{
 	private $db;
 	public function __construct( $dbConnection )
 		{
 			$this->db = $dbConnection;
 		}	
 	public function updatePoll ( $input ) 
	{
 		if ( $input === "ja" ) 
 		{
 			$updateSQL = "UPDATE poll SET ja = ja+1 WHERE poll_id = 1";
 		} 
 		else if ( $input === "nee" ) 
 		{
 			$updateSQL = "UPDATE poll SET nee = nee+1 WHERE poll_id = 1";
 		}

 		$updateStatement = $this->db->prepare($updateSQL);
 		$updateStatement->execute();
 		//header('location:index.php');
	}
	public function getPollData () 
	{
 		$sql = "SELECT poll_vraag,ja,nee FROM poll WHERE poll_id = 1";
 		$statement = $this->db->prepare($sql);
 		$statement->execute();
 		$pollData = $statement->fetchObject();
 		return $pollData;
	}

}