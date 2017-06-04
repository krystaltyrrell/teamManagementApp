<?php
if(!empty($_POST)) {
	$order_by_var = $_REQUEST['order_by_var'];
} else {
	$order_by_var = "date";
}

echo '<table class="table table-striped table-condensed table-bordered table-responsive table-hover">
				<tr>
					<th><h5>Derby Name</h5></th>
					<th><h5>Activity Date</h5></th>
					<th><h5>Type</h5></th>
					<th><h5>Details</h5></th>
					<th><h5>Start Time</h5></th>
					<th><h5>End Time</h5></th>
					<th><h5>Points</h5></th>
				</tr>';


$stmt = $conn->prepare("SELECT skaters.derby_name, DATE_FORMAT(activities.date,'%d %b %y')as date, activities.activity_type, activities.details, TIME_FORMAT(activities.start_time, '%h:%i %p') as start_time, TIME_FORMAT(activities.end_time, '%h:%i %p') as end_time, activities.activities_id, activities.points FROM skaters RIGHT JOIN activities ON skaters.id=activities.player_id order by $order_by_var"); 
                        $stmt->execute();
                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                        $results = $stmt->fetchAll();

											if(!$results) {echo '<tr><td>No logs have been found.</td><td></td></tr>';
																		} else {
										
													foreach($results as $key => $log_row){
													$derbyName= $log_row['derby_name'];
													$activityDate= $log_row['date'];
													$activityType= $log_row['activity_type'];
													$details= $log_row['details'];
													$startTime= $log_row['start_time'];
													$endTime= $log_row['end_time'];
													$activitiesId= $log_row['activities_id'];
													$points= $log_row['points'];																						
	echo
		'<tr>
			<td><p><strong>'.$derbyName.'</strong></p></td>
			<td><p>'.$activityDate.'</p></td>
			<td><p>'.$activityType.'</p></td>
			<td><p>'.$details.'</p></td>
			<td><p>'.$startTime.'</p></td>
			<td><p>'.$endTime.'</p></td>
			<td><p>'.$points.'</p> &nbsp; &nbsp; 
					<a href="deleteHistoryLog.php?activities_id='.$activitiesId.'"><span class="glyphicon glyphicon-trash"></span></a>
			</td>
		</tr>';}
		}

	echo '</table>
		</div>';
?>