<?php
    include('connect.php');
		include('header.php');
?>

	<!--end of header-->

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-3">

				<div class="row">
					<div class="col-xs-12">
						<h3>Skaters</h3></div>


					<div class="col-xs-12">
						<form method="post">
							<div class="input-group">
								<select class="form-control" name="is_active" id="is_active">
									<option value="" disabled selected hidden>Skater Status...</option>
									<option value="1">Active Skaters</option>
									<option value="0">Inactive Skaters</option>
								</select>
								<span class="input-group-btn">
						<button type="submit" class="btn btn-default" type="button">Go!</button>
					</span>
							</div>
						</form>




					</div>


					<div class="col-xs-12"><a id="newSkaterButton" data-toggle="modal" class="btn btn-default btn-primary" href="#addSkater" role="button">Add New Skater</a></div>
				</div>

			</div>
			<br>
			<!--		end of col-md-3 being next column-->
			<div class="col-xs-12 col-md-9 materialTable">

				<?php
    		include('skatersTable.php');
			?>
			</div>
		</div>
	</div>





	<!--ADD NEW SKATER MODAL-->
	<div class="modal fade" id="addSkater" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add New Skater</h4>
				</div>
				<div class="modal-body">
					<form action="addSkater.php">
						<div class="form-group">
							<label for="newSkaterName">Derby Name:</label>
							<input type="text" class="form-control" name="newSkaterName" id="newSkaterName">
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="active" id="active">Active</label>
						</div>
						<button type="submit" class="btn btn-success">Submit</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>


	<!--Edit SKATER MODAL-->
	<div class="modal fade" id="editSkater" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Edit Skater</h4>
				</div>
				<div class="modal-body">
					<form action="updateSkater.php">

						<div class="form-group">
							<label for="derbyName">Derby Name:</label>
							<input type="text" class="form-control" name="derbyName" id="derbyName">
						</div>

						<div class="checkbox">
							<label>
								<input type="checkbox" name="activeStatus" id="activeStatus">Active</label>
						</div>
						<input type="hidden" name="derbyId" id="derbyId">

						<button type="submit" class="btn btn-success">Submit</button>

					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>



	<!--DELETE SKATER MODAL-->
	<div class="modal fade" id="deleteSkater" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Delete Skater</h4>
				</div>
				<div class="modal-body">
					<H6>Are you sure you want to delete <span id="deleteName"></span>?</H6>
					<form action="deleteSkater.php">

						<input type="hidden" name="deleteId" id="deleteId">

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
	<div class="modal fade" id="editYtdPoints" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Edit Points</h4>
				</div>
				<div class="modal-body">
					<h4>Adjust Points for <span id="pointsName"></span></h4>
					<h5>Current Point Total: <span id="currentPoints"></span></h5>
					<form action="editPoints.php">
						<fieldset>
							<label for="edit_date">Date (affects quota period):</label>
							<input type="date" name="edit_date" id="edit_date" required>
						</fieldset>

						<fieldset>
							<label for="new_points">New Points Total:</label>
							<input type="num" name="new_points" id="new_points" required>
						</fieldset>
						<input type="hidden" name="player_id" id="player_id">
						<input type="hidden" name="ytd_points" id="ytd_points">
						<button type="submit" class="btn btn-success">Submit</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>




	<br>
	<br>




	</body>

	</html>