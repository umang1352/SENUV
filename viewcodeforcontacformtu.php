<div class="inner_content">

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Manage Contact</h2>
									<!-- tables -->
									
									<div class="agile-tables">
											<div class="table-responsive">
											<table id="table">
											<thead>
											  <tr>
												<th>Contact_id</th>
												<th>Contact_Name</th>
												<th>Contact_Email</th>
												<th>Contact_Sub</th>
												<th>Contact_Msg</th>

												<th colspan="3">Manage Contact</th>
											  </tr>
											</thead>
											<tbody>
								    <?php 
									foreach($contact_arr as $contact) 
									{
									?>
									<tr>
									<td><?php echo $contact->contact_id;?></td>
									<td><?php echo $contact->contact_name;?></td>
									<td><?php echo $contact->contact_email;?></td>
									<td><?php echo $contact->contact_sub;?></td>
									<td><?php echo $contact->contact_msg;?></td>
									
									  </tr>
									 <?php
									}
									 ?>
											 
								</tbody>
						 </table>
					</div>
									  
				</div>				
									
			</div>