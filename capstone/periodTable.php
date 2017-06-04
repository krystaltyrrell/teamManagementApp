<?php
								 $stmt = $conn->prepare("SELECT quota_periods_id, period_name, start_date, DATE_FORMAT(start_date,'%d %b %y') as simple_start_date, end_date, DATE_FORMAT(end_date,'%d %b %y')as simple_end_date , total_available_points 
    FROM quota_periods"); 
                        $stmt->execute();
                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                        $results = $stmt->fetchAll();
												if($results){
                        foreach($results as $key => $period){
														$quota_periods_id = $period['quota_periods_id']; 
													  $period_name = $period['period_name']; 
                            $start_date = $period['simple_start_date'];  
														$end_date = $period['simple_end_date'];
													  $total_available_points = $period['total_available_points']; 
														$reg_start_date = $period['start_date'];
														$reg_end_date = $period['end_date'];
														
												
									
                        echo '<div class="col-xs-12 col-sm-3">
				<div class="pending materialTable smDivs">
					<p><strong>' .$period_name. '</strong></p><p>' .$start_date. '&nbsp;&#45;&nbsp;' .$end_date. '</p><p> Total Available Points: ' .$total_available_points. '</p> &nbsp; <a data-toggle="modal" href="#editPeriod" data-period-id="'.$quota_periods_id.'" data-period-name="'.$period_name.'" data-total-available="'.$total_available_points.'" data-reg-enddate="'.$reg_end_date.'" data-reg-startdate="'.$reg_start_date.'"><i class="fa fa-pencil-square-o fa-4x" aria-hidden="true"></i></a>
					<a data-toggle="modal" href="#deleteThisPeriod" data-period-id="'.$quota_periods_id.'" data-period-name="'.$period_name.'"><span class="glyphicon glyphicon-trash"></span></a>
					</div>
				</div>';    }                     
                        } 
													else {echo '<div class="col-xs-12">
					<h6 class="materialTableDos">No Pending Logs</h6><br>
				</div>' ;}
?>