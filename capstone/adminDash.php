<?php
    include('connect.php');
		include('header.php');
?>

	<!--end of header-->

	<div class="container">
		<div class="row">
			<?php
					include('pendingLogs.php');
				?>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<hr>
			</div>
			<div class='col-xs-12 col-md-3'>
				<div class="row">
					<!--Everything on the left column goes in this row-->
					<div class="col-xs-12">
						<h3>Eligibility</h3>
					</div>
					<div class="col-xs-12">
						<form method="post">
							<div class="input-group">
								<select class="form-control" name="quotaPeriod" id="quotaPeriod">
									<option value="" disabled selected hidden>Select Quota Period</option>
									<?php
								 $stmt = $conn->prepare("SELECT period_name, ROUND(total_available_points * .6) AS min_quota from quota_periods 	WHERE  CURRENT_DATE between start_date and end_date
								 	 UNION
								   SELECT period_name, ROUND(total_available_points * .6) AS min_quota from quota_periods"); 
                 $stmt->execute();
                 $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                 $results = $stmt->fetchAll();
                 foreach($results as $key => $quota_period){
                         $quotaPeriod = $quota_period['period_name'];
												 $minQuota = $quota_period['min_quota'];
                         echo '<option value="'.$minQuota.'|'.$quotaPeriod.'">'.$quotaPeriod.'</option>';                  
                 }
						?>
								</select>
								<span class="input-group-btn">
						<button type="submit" class="btn btn-default" type="button">Go!</button>
					</span>
							</div>
						</form>
					</div>
				</div>
				<!--row with left column contents -->

			</div>

			<div class="col-xs-12 col-md-9 materialTable">
				<?php
    		include('eligibility.php');
			?>

			</div>
		</div>
	</div>
	<br>
	<br>
	</body>

	</html>