<?php $this->load->view('header')?>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			

		
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Lihat Data</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
				
				
				<div class="col-lg-12">
                    <div class="panel panel-default">
						
						 <div class="panel-body">
                            <h4><b>ID</b></h4>
                            <blockquote>
                                <p><?php echo $person->id; ?></p>
						</div>
						
                        <div class="panel-body">
                            <h4><b>Nama</b></h4>
                            <blockquote>
                                <p><?php echo $person->name;?></p>
						</div>
						
						<div class="panel-body">
                            <h4><b>Jenis Kelamin</b></h4>
                            <blockquote>
                                <p><?php echo strtoupper($person->gender)=='M'? 'Laki-Laki':'Perempuan' ; ?></p>
								</blockquote>
                           </div>
						   
						  <div class="panel-body">
                            <h4><b>Tanggal Lahir</b></h4>
                            <blockquote>
                                <p><?php echo date('d-m-Y',strtotime($person->dob));?></p>
								</blockquote>
                           </div>
					
                        
                        <!-- /.panel-body -->
                    <!-- /.panel -->
                </div>
				 <div class="col-lg-6">
				 <a href="javascript:window.print()"><input type="submit" class="btn btn-outline btn-primary btn-lg" value="Print" name="Print"> 
	<?php echo $link_back; ?>
				 </div>
				
				
						 
					
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
	
	<?php $this->load->view('footer')?>