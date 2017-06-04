<?php

if(!empty($_POST)) {
	$quotaPeriod = $_REQUEST['quotaPeriod'];
  $quotaArray = explode('|', $quotaPeriod);
	$minPoints = $quotaArray[0];
	$quotaPeriodName = $quotaArray[1];
}
else {
 	$stmt = $conn->prepare("SELECT period_name, ROUND(total_available_points * .6) AS min_quota from quota_periods WHERE  CURRENT_DATE between start_date and end_date LIMIT 1"); 
                        $stmt->execute();
                        // set the resulting array to associative
                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                        $results = $stmt->fetchAll();
							
                        foreach($results as $key => $period){
													$minPoints  = $period['min_quota'];
													$quotaPeriodName = $period['period_name'];
													}													
}

echo '<h6><strong>Quota Period: </strong>'.$quotaPeriodName.'&nbsp; &nbsp; <strong>Minimum Points Required: </strong>'.$minPoints.'</h6>';


$stmt = $conn->prepare("Select skaters.derby_name, IFNULL(SUM(points), 0) as totalPoints from activities  INNER JOIN skaters on activities.player_id = skaters.id WHERE date BETWEEN (SELECT start_date from quota_periods WHERE period_name = '$quotaPeriodName') and (SELECT end_date from quota_periods WHERE period_name = '$quotaPeriodName') and approved = 1 GROUP BY skaters.derby_name ORDER BY totalPoints DESC"); 
                        $stmt->execute();
                        // set the resulting array to associative
                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                        $results = $stmt->fetchAll();
							if(!$results) {echo '<h3>No skaters have earned points this period yet.</h3>';}
							else {
								echo '<h5>Points This period (Quota met in green)</h5>';
echo '<table class="table table-striped table-condensed table-bordered table-responsive table-hover"';
							}
                        foreach($results as $key => $period_points){
													$derbyName = $period_points['derby_name'];
													$points = $period_points['totalPoints'];
													
											if ($points >= $minPoints){
	echo '<tr><td class="success">'.$derbyName.'</td><td class="success">'.$points.'</td></tr>';
}
else {
	echo '<tr><td>'.$derbyName.'</td><td>'.$points.'</td></tr>';
}
	}
echo '</table>';
?>