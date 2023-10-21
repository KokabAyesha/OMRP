

<?php
include ("partials/_headlinks.php");
?>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                       
						<?php include ("partials/_sidebar.php");?>
                      
                    </div>
                 
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                            
						<div class="module">
							<div class="module-head">
								<h3>VIEW PAST TRANSACTION DETAIL</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>Oprator</th>
											<th>Mobile No</th>
											<th>Plan selected</th>
											<th>Amount</th>
											<th>Card name</th>
											<th>Card No</th>
											<th>Expiery Date</th>
											<th>CVV no</th>
											<th>Transaction Date</th>
										
											
										</tr>
									</thead>
									<tbody>
										<?php 
                                        
                                        $sql = "SELECT * FROM recharge";
                                        $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                          // output data of each row
                                          while($row = $result->fetch_assoc()) {
                                        //    print_r($row);
                                        //    die();
                                           
                                         ?>
										<tr class="gradeU">
                                        <td><?php echo $row["oprator"]?></td>
                                        <td><?php echo $row["m_no"]?></td>
                                        <?php if($row['vas']==null){?>
                                        <td>Postpaid</td>
                                        <?php
                                         }else{
                                         ?>
                                         <td>prepaid</td>
                                         <?php
                                             }
                                        ?>
                                        <td><?php echo $row["amount"]?></td>
                                        <td><?php echo $row["card_name"]?></td>
                                        <td><?php echo $row["card_no"]?></td>
                                        <td><?php echo $row["exp_date"]?></td>
                                        <td><?php echo $row["cvv_no"]?></td>
                                        <td><?php echo $row["created_at"]?></td>
											
											
										
											
                                         
										</tr>
                                        <?php
                                         }
                                        } else {
                                          echo "0 results";
                                        }
                                        $conn->close();
                                        ?>
                                    
									</tbody>
									<tfoot>
										<tr>
                                        <th>Oprator</th>
											<th>Mobile No</th>
											<th>Plan selected</th>
											<th>Amount</th>
											<th>Card name</th>
											<th>Card No</th>
											<th>Expiery Date</th>
											<th>CVV no</th>
											<th>Transaction Date</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div><!--/.module-->
                            </div>
                       
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
       <?php include("partials/_footer.php")?>
       <script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
    </body>
</html>
      