

<div id="booking" class="container-fluid">
	<div class="col-lg-12">
	<form action="" id="book-flight">
		<input type="hidden" name="flight_id" value="<?php echo $_GET['id'] ?>">
		<div class="form-group row" id="qty">
			<div class="col-md-3">
			<label for="" class="control-label">Person/s</label>
			<input type="number" class="form-control text-right" min='1' value="1" id="count" max="<?php echo $_GET['max'] ?>">
			</div>
			<div class="col-md-2">
			<label for="" class="control-label">&nbsp;</label>
			<button class="btn btn-primary btn-block" type="button" id="go">Go</button>
			</div>
			<div class="col-md-2">
			<label for="" class="control-label">&nbsp;</label>
			<button class="btn btn-secondary btn-block" type="button" data-dismiss="modal">Cancel</button>
			</div>
		</div>
		<div id="row-field" style="display: none">
			<div class="row ">
				<div class="col-md-12 text-center">
					<button class="btn btn-primary btn-sm " >Save</button>
					<button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
		
	</form>
	</div>
</div>
