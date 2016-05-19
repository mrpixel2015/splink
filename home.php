<link href='css/fullcalendar.css' rel='stylesheet' />
<link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='lib/moment.min.js'></script>
<script src="js/jquery.min.js"></script>
<script src='js/fullcalendar.min.js'></script>
<script>
	
	$(document).ready(function(){


		//console.log("home page");

		$('#calendar').fullCalendar({
			editable: true,
			eventLimit: true // allow "more" link when too many events
			
		});



	});

</script>
<style>
	
	#calendar {
		max-width: 700px;
		margin: 0 auto;
	}

</style>

<div class="row">
	<div class="col-md-12">
		<!--<span class="lead">KALENDAR LAPORAN MENGIKUT BULANAN</span>-->
	</div>
</div>
<div class="row">
	<div class="col-md-8">
		<div id="calendar"></div>
	</div>
	<div class="col-md-4">
		<span class="lead">Borang Data</span>
		<p>
			<form class="form-horizontal">
			  <div class="form-group">
			    <div class="col-sm-12">
			      <input type="email" class="form-control" id="inputEmail3" placeholder="Data 1">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-12">
			      <input type="password" class="form-control" id="inputPassword3" placeholder="Data 2">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-12">
			      <input type="password" class="form-control" id="inputPassword3" placeholder="Data 3">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-12">
			      <input type="password" class="form-control" id="inputPassword3" placeholder="Data 4">
			    </div>
			  </div>
			 
			  <div class="form-group">
			    <div class="col-md-12 text-center">
			      <button type="submit" class="btn btn-danger"><i class="fa fa-close fa-fw"></i>Batal</button>&nbsp;
			      <button type="submit" class="btn btn-info"><i class="fa fa-save fa-fw"></i>Simpan</button>
			    </div>
			  </div>
			</form>

		</p>
	</div>
</div>