<?php
include("rs_display/rs_display_config.php");

function dbQuery($sql) {
	global $dbHost;
	global $dbName;
	global $username;
	global $password;

	try {
	    /* Connect to server */
	    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $username, $password);
	    // Set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    /* Execute the SQL command */
	    $stmt = $conn->prepare($sql); 
	    $stmt->execute();

	    // 
	    $stmt->setFetchMode(PDO::FETCH_ASSOC);
	    $result = $stmt->fetchAll();
	    return $result;
	}
	catch(PDOException $e) {
	    return null;
	}
}

function get_season_results($season_id) {
	/* Create array to store the amount of points earned for each rank */
    $season_rank_pts = array();

	/* Get all individual player results for season */
	$sql_get_season_pts = "SELECT * FROM rs_season_pts WHERE season_id = " . $season_id;
	$query_season_pts = dbQuery($sql_get_season_pts);

	foreach($query_season_pts as $data) {
		$season_rank_pts[$data["rank"]] = $data["points"];
	}

	/* Create array for season ranks */
	$season_results = array();

	/* Get all individual player results for season */
	$sql_get_season_results = "SELECT * FROM rs_event_results WHERE season_id = " . $season_id;
	$event_results = dbQuery($sql_get_season_results);

	/* Total up players' points earned through entire season */
	foreach($event_results as $event_result) {
		if(array_key_exists($event_result["player_name"], $season_results)) {
                    // If player already exists in the season results...
                    //Add to existing points
			$season_results[$event_result["player_name"]] += $season_rank_pts[$event_result["player_rank"]];
		} else {
                    // If the player doesn't exist in the season results...
                    // Create a new index
			$season_results[$event_result["player_name"]] = $season_rank_pts[$event_result["player_rank"]];
		}
	}

	/* Sort the players' rankings from highest to lowest */
	arsort($season_results);

	return $season_results;
}

function print_season_results_table($season_results) {
	$rank_num = 1;
	$prev_result_total = -1;

	echo "<table class=\"table table-striped\"><thead><tr><th>Rank</th><th>Player Name</th><th>Points</th></tr></thead><tbody>";

	foreach($season_results as $player_name => $total_season_pts) {
		if(intval($total_season_pts) < $prev_result_total)
			++$rank_num;

		echo "<tr><td>$rank_num</td>";
		echo "<td>$player_name</td>";
		echo "<td>$total_season_pts</td></tr>";

		$prev_result_total = intval($total_season_pts);
	}

	echo "</tbody></table>";
}

function display_season_results($season_id) {
	$season_results = get_season_results($season_id);
	print_season_results_table($season_results);
}
?>