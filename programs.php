<?php 

	function getDateTimestamp($date) {
		$str_date = $date;
		$obj_date = DateTime::createFromFormat('D, d/m/Y - H:i', $str_date);
		return $obj_date->getTimestamp();
	}

	$programs = array(
		array(
		 "series" => "Sherlock", 
		 "series_img" => "img/sherlock.jpg", 
		  "genre" => "Crime drama", 
		  "season" => 3, 
		  "episode" => "The Empty Hearse",
		  "description" => "Two years after his reported Reichenbach Fall demise, Sherlock, who has been cleared of all fraud charges against him, returns with Mycroft's	help to a London under threat of terrorist attack. John has moved on and has a girlfriend, Mary Morstan. Sherlock enlists Molly to assist him, but when John is kidnapped by unknown assailants and is rescued by Sherlock and Mary, John returns to help find the terrorists and an underground plot to blow up the Houses of Parliament during an all night sitting on Guy Fawkes Night.",
		  "datetime" => getDateTimestamp("Wed, 31/12/2014 - 21:00")
		),
		array(
		 "series" => "Arrested Development",
	     "series_img" => "img/arrested_development.jpg",
	     "genre" => "Sitcom",
	     "season" => 2,
	     "episode" => "Righteous Brothers",
	     "description" => "The model home collapses. Tobias and Kitty head to Las Vegas together.",
	     "datetime" => getDateTimestamp("Wed, 31/12/2014 - 23:00")
		)
	);

	echo json_encode($programs);

 ?>