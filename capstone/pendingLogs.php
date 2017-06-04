<?php
								 $stmt = $conn->prepare("SELECT *
    FROM activities INNER JOIN skaters ON activities.player_id = skaters.id WHERE activities.approved=0"); 
                        $stmt->execute();
                        // setting the resulting array to associative
                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                        $results = $stmt->fetchAll();
												if($results){
													echo '<div class="col-xs-12">
					<h3>Pending Approvals</h3>
				</div>';
                        foreach($results as $key => $skater){
													  $activities_id = $skater['activities_id']; 
                            $derby_name = $skater['derby_name'];  
														$id = $skater['id'];
													  $activity_date = $skater['date']; 
														$activity_type = $skater['activity_type']; 
														$details = $skater['details']; 
														$start_time = $skater['start_time']; 
														$end_time = $skater['end_time']; 
														$points = $skater['points']; 
												
									
                        echo '<div class="col-xs-12 col-sm-3">
				<div class="pending materialTable">
					<p><strong>' .$derby_name. '</strong></p><p>' .$activity_date. '&nbsp;' .$start_time. '&#45;' .$end_time. '&nbsp; &#40;' .$points. '&nbsp; points&#41; </p><p>' .$activity_type. '</p><p>' .$details. '</p> <a href="approveLog.php?activities_id='.$activities_id.'"><i class="fa fa-check-circle fa-4x" aria-hidden="true"></i></a>
					<a href="deleteLog.php?activities_id='.$activities_id.'"><span class="glyphicon glyphicon-trash"></span></a>
					</div>
				</div>';    }                     
                        } 
													else {echo '<div class="col-xs-12">
					<h6 class="materialTableDos">No Pending Logs</h6><br>
				</div>' ;}
?>