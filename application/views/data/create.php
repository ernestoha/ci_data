<div class="container">
	<div class="row">
		<div class="col-md-8 cl-sm-8 col-md-offset-2 col-sm-offset-2 col-sm-offset2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>Data Entry</h3>
				</div>
				<div class="panel-body">
					<div id="the-message"></div>
					<?php echo form_open("data/create", array("id" => "form-data", "class" => "form-horizontal")) ?>
						<div class="form-group">
							<label for="name" class="col-md-3 col-sm-4 control-label">Name</label>
							<div class="col-md-9 col-sm-8">
								<input type="text" name="name" id="name" class="form-control" />
							</div>
						</div>						
						<div class="form-group">
							<label for="birthday" class="col-md-3 col-sm-4 control-label">DOB (YYYY-MM-DD)</label>
							<div class="col-md-9 col-sm-8">
								<input type="text" name="birthday" id="birthday" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-md-3 col-sm-4 control-label">Email</label>
							<div class="col-md-9 col-sm-8">
								<input type="text" name="email" id="email" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label for="id_color" class="col-md-3 col-sm-4 control-label">Favorite Color</label>
							<div class="col-md-9 col-sm-8">
								<select name="id_color" id="id_color" class="form-control">
									<option value="none" selected>------Select------</option> 
									<?php foreach($colors as $color): ?>
										<option value="<?php echo $color['id']; ?>"><?php echo $color['name']; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-3 col-md-3">
								<button type="submit">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$( document ).ready(function() {
	  $( "#name" ).focus();
	});

	$("#form-data").submit(function( event ) {
		event.preventDefault();
		var me = $(this);
		$.ajax({
			url: me.attr('action'),
			type: 'post',
			data: me.serialize(),
			dataType: 'json',
			success: function(response){
				$('#the-message').text('');
        		if (response.success == true) {
					$('#the-message').append(response.messages);
					$('.form-group').removeClass('has-error') 
									.removeClass('has-success');
					$('.text-danger').remove();
					me[0].reset();
					$( "#name" ).focus();
        		} else {
					$.each(response.messages, function(key, value) {
						var element = $('#' + key);
						element.closest('div.form-group')
							.removeClass('has-error')
							.addClass((value.length>0) ? 'has-error' : 'has-success')
							.find('.text-danger')
							.remove();
						element.after(value);
					});
        		}
    		}
		});
	});
</script>
