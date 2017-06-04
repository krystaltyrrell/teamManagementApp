$(document).ready(function() {
    // -----------------------------------------------------------------------
    $.each($('#myTabs').find('li'), function() {
        $(this).toggleClass('active', 
            window.location.pathname.indexOf($(this).find('a').attr('href')) > -1);
    }); 
   


$('#editSkater').on('show.bs.modal', function(e) {

    var $derbyName = $(e.relatedTarget).data('derby-name');
		var $derbyId = $(e.relatedTarget).data('derby-id');
		var $derbyStatus = $(e.relatedTarget).data('derby-status');

		$("#derbyName").val($derbyName);
		$("#derbyId").val($derbyId);
		if ($derbyStatus == 1) {$("#activeStatus").attr('checked', 1);}
});
	

$('#deleteSkater').on('show.bs.modal', function(e){
	
	var $derbyDeleteId = $(e.relatedTarget).data('derby-id');
	var $derbyDeleteName = $(e.relatedTarget).data('derby-name');
	
	$('#deleteId').val($derbyDeleteId);
	$('#deleteName').text($derbyDeleteName);	
});
	
	
$('#editYtdPoints').on('show.bs.modal', function(e){
	
	var $derby_id = $(e.relatedTarget).data('derby-id');
	var $derby_name = $(e.relatedTarget).data('derby-name');
	var $derby_points = $(e.relatedTarget).data('derby-ytdpoints');
	
	$('#player_id').val($derby_id);
	$('#ytd_points').val($derby_points);
	$('#pointsName').text($derby_name);
	$('#currentPoints').text($derby_points);
});	
	
	
$('#deleteThisPeriod').on('show.bs.modal', function(e){
	
	var $periodDeleteId = $(e.relatedTarget).data('period-id');
	var $periodDeleteName = $(e.relatedTarget).data('period-name');
	
	$('#periodId').val($periodDeleteId);
	$('#periodName').text($periodDeleteName);	
});	
	
$('#editPeriod').on('show.bs.modal', function(e){
	
	var $period_id = $(e.relatedTarget).data('period-id');
	var $period_name = $(e.relatedTarget).data('period-name');
	var $total_available= $(e.relatedTarget).data('total-available');
	var $reg_end_date = $(e.relatedTarget).data('reg-enddate');
	var $reg_start_date = $(e.relatedTarget).data('reg-startdate');
	
	$('#period_id').val($period_id);
	$('#period_name').val($period_name);
	$('#start_date').val($reg_start_date);
	$('#end_date').val($reg_end_date);
	$('#available_points').val($total_available);
	
});		
	
	
	
	 // -----------------------------------------------------------------------
});