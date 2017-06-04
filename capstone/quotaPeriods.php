<?php
    include('connect.php');
		include('header.php');
?>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-3">

				<div class="row">
					<div class="col-xs-12">
						<h3>Quota Periods</h3></div>

					<div class="col-xs-12"><a id="newSkaterButton" data-toggle="modal" class="btn btn-default btn-primary" href="#addNewPeriod" role="button">Add New Quota Period</a></div>
				</div>

			</div>
			<br>
			<!--		end of col-md-3 being next column-->
			<div class="col-xs-12 col-md-9 materialTable">

				<?php
    		include('periodTable.php');
			?>
			</div>
		</div>
	</div>

	<!--DELETE SKATER MODAL-->
	<div class="modal fade" id="deleteThisPeriod" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Delete Quota Period</h4>
				</div>
				<div class="modal-body">
					<H6>Are you sure you want to delete <span id="periodName"></span>?</H6>
					<form action="deletePeriod.php">

						<input type="hidden" name="periodId" id="periodId">

						<button type="submit" class="btn btn-danger">Delete</button>

					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>


	<!--Edit Points MODAL-->
	<div class="modal fade" id="editPeriod" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Edit Quota Period</h4>
				</div>
				<div class="modal-body">
					<form action="updatePeriod.php">
						<fieldset>
							<label for="period_name">Period Name:</label>
							<input type="text" name="period_name" id="period_name" required>
						</fieldset>

						<fieldset>
							<label for="start_date">Start Date:</label>
							<input type="date" name="start_date" id="start_date" required>
						</fieldset>

						<fieldset>
							<label for="end_date">End Date:</label>
							<input type="date" name="end_date" id="end_date" required>
						</fieldset>

						<fieldset>
							<label for="available_points">Total Available Points This Period:</label>
							<input type="num" name="available_points" id="available_points" required>
						</fieldset>


						<input type="hidden" name="period_id" id="period_id">
						<button type="submit" class="btn btn-success">Update</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="addNewPeriod" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add New Quota Period</h4>
				</div>
				<div class="modal-body">
					<form action="addPeriod.php">
						<fieldset>
							<label for="newPeriodName">Period Name:</label>
							<input type="text" name="newPeriodName" id="newPeriodName" required>
						</fieldset>

						<fieldset>
							<label for="newStartDate">Start Date:</label>
							<input type="date" name="newStartDate" id="newStartDate" required>
						</fieldset>

						<fieldset>
							<label for="newEndDate">End Date:</label>
							<input type="date" name="newEndDate" id="newEndDate" required>
						</fieldset>

						<fieldset>
							<label for="newAvailablePoints">Total Available Points This Period:</label>
							<input type="num" name="newAvailablePoints" id="newAvailablePoints" required>
						</fieldset>


						<button type="submit" class="btn btn-success">Create</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>



	</body>

	</html>