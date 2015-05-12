<?php $this->load->view('header');?>


			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Masukkan Data</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					<?php echo $message; ?>
						<form method="post" action="<?php echo $action; ?>" class="form-horizontal" enctype="multipart/form-data">
							<fieldset>

							  <div class="control-group">
								<label class="control-label">ID</label>
								<div class="controls">
								  <input name="id" class="input-xlarge uneditable-input" type="hidden" value="<?php echo set_value('id',$this->form_data->id); ?>">
								 <span  class="input-xlarge uneditable-input">Anda Otomatis Akan Mendapat ID</span>
								</div>
							  </div>
							  
						
							  
							  
							    <div class="control-group">
								<label class="control-label" for="focusedInput">Nama</label>
								<div class="controls">
								  <input name="name" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo set_value('name',$this->form_data->name); ?>">
								  <?php echo form_error('name'); ?>
								</div>
							  </div>
							  
							 
							  
							  
							    <div class="control-group">
								<label class="control-label">Jenis Kelamin</label>
								<div class="controls">
								
								
									<label class="radio">
									 <input type="radio" name="gender" value="M" <?php echo set_radio('gender', 'M', $this->form_data->gender == 'M'); ?>/> Laki-Laki
									 </label>
									 	  <div style="clear:both"></div>
										  <label class="radio">
							<input type="radio" name="gender" value="F" <?php echo set_radio('gender', 'F', $this->form_data->gender == 'F'); ?>/> Perempuan
<?php echo form_error('gender'); ?>
</label>
								  
								</div>
							  </div>
							  
							    <div class="control-group">
								<label class="control-label" for="date01">Tanggal Lahir</label>
								<div class="controls">
								 <input type="text" name="dob" onclick="displayDatePicker('dob');" class="text" value="<?php echo set_value('dob',$this->form_data->dob); ?>"/>
				<a href="javascript:void(0);" onclick="displayDatePicker('dob');"><img src="<?php echo base_url(); ?>res/css/images/calendar.png" alt="calendar" border="0"></a>
<?php echo form_error('dob'); ?>
								</div>
							  </div>
							  
							
							  
							  
							   
					
							
								
								  </select>
								</div>
							  </div>
							
		
							  <div class="form-actions">
								<input type="submit" class="btn btn-primary"  value="Save"></input>
						<?php echo $link_back; ?>
							  </div>
							</fieldset>
						  </form>
						  	<br>
						  
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			


	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
<?php $this->load->view('footer');?>	