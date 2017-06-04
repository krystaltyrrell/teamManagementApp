<?php
if(!empty($_POST)) {
	$is_active_var = $_REQUEST['is_active'];
} else {
	$is_active_var = 1;
}


if ($is_active_var) {
			echo '<div class="panel panel-success">
			<div class="panel-heading">Active Skaters</div>';
} else {
	echo '<div class="panel panel-default">
		<div class="panel-heading">Inactive Skaters</div>';
}



echo '<table class="table table-striped table-condensed table-bordered table-responsive table-hover">
				<tr>
					<th>Derby Name</th>
					<th class="text-center">YTD Points</th>
				</tr>';


$stmt = $conn->prepare("SELECT id, derby_name, active, IFNULL(SUM(points), 0) as totalPoints FROM skaters LEFT JOIN activities ON skaters.id=activities.player_id WHERE active = '$is_active_var' GROUP BY skaters.id order by derby_name"); 
                        $stmt->execute();
                        // set the resulting array to associative
                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                        $results = $stmt->fetchAll();

											if(!$results) {echo '<tr><td>No skaters have been found.</td><td></td></tr>';
																		} else {
										
													foreach($results as $key => $active_skater){
													$derby_id= $active_skater['id'];
													$derby_name = $active_skater['derby_name'];
													$ytdPoints = $active_skater['totalPoints'];
													$derby_status = $active_skater['active'];	
																							
	echo
		'<tr>
			<td>
				<a data-toggle="modal" href="#editSkater" data-derby-name="'.$derby_name.'" data-derby-id="'.$derby_id.'" data-derby-status="'.$derby_status.'">'.$derby_name.'&nbsp; <span class="glyphicon glyphicon-pencil"></span></a> &nbsp; &nbsp;
				
				<a data-toggle="modal" href="#deleteSkater" data-derby-name="'.$derby_name.'" data-derby-id="'.$derby_id.'"><span class="glyphicon glyphicon-trash"></span></a>
				
			</td>
		<td class="text-center">'
			.$ytdPoints.
			'&nbsp;&nbsp;<a data-toggle="modal" href="#editYtdPoints" data-derby-id="'.$derby_id.'" data-derby-name="'.$derby_name.'" data-derby-ytdPoints="'.$ytdPoints.'"><span class="glyphicon glyphicon-pencil"></span></a>
		</td>
		</tr>';}
		}

	echo '</table>
		</div>';
?>