<?php $this->load->view('header');?>
			<!-- start: Content -->
			<div id="content" class="span">
			
			


			<div class="row-fluid sortable">		
				<div class="box span">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						<thead>
							  <tr>
							  <th>No</th>
								  <th>ID</th>
								  <th>Nama</th>
								  <th>Jenis Kelamin</th>
								  <th>Tanggal Lahir</th>
								
								  <th>Action</th>
							  </tr>
						  </thead>   
						  
						  <tbody>
						
								
								
											<?php
											  $no=0;
                foreach($daftar_user as $user){
					$no++;
        ?>
                <tr>
				<th><?php echo$no ?></th>
            <td><?php echo $user->id; ?></td>
            <td><?php echo $user->name; ?></td>
            <td>
			<?php if ($user->gender == 'M')
			{
				echo "Laki-Laki";
			}
			else
			{
				echo "Perempuan";
			}; ?></td>
            <td><?php echo $user->dob; ?></td>
		
			 <td>  
			 <?php echo anchor('person/view/'.$user->id,'view',array('class'=>'view')); ?>
			 <?php echo  anchor('person/update/'.$user->id,'update',array('class'=>'update'));?>
			 <?php echo anchor('person/delete/'.$user->id,'delete',array('class'=>'delete','onclick'=>"return confirm('Yakin akan menghapus?')")); ?>
			 </td>
        </tr>
           <?php } ?>

								
								
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			<?php echo anchor('person/add/','Tambah data baru',array('class'=>'add')); ?>
			</div><!--/row-->

		

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		

	
	<div class="clearfix"></div>
	

<?php $this->load->view('footer');?>	
	
