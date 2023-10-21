

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
								<h3>All users</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>name</th>
											<th>Feedback</th>
											
										</tr>
									</thead>
									<tbody>
										<?php 
                                        $sql = "SELECT * FROM feedback";
                                        $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                          // output data of each row
                                          while($row = $result->fetch_assoc()) {
                                           
                                         ?>
										<tr class="gradeU">
											<td><?php echo $row["name"]?></td>
											<td><?php echo $row["feedback"]?></td>
										
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
                                        <th>name</th>
											<th>Feedback</th>
											
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
      