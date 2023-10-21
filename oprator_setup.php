

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
											<th>image</th>
											<th>link</th>
											<th>Action</th>
											
										</tr>
									</thead>
									<tbody>
										<?php 
                                        $sql = "SELECT * FROM oprator";
                                        $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                          // output data of each row
                                          while($row = $result->fetch_assoc()) {
                                           
                                         ?>
										<tr class="gradeU">
											<td><?php echo $row["name"]?></td>
											<td class="center"><img src="<?php echo $row["img"]?>" width="80px" alt=""></td>
											<td><a href="<?php echo $row["link"]?>"target="_blank" ><?php echo $row["link"]?></a></td>
											
											<td class="center"><a href="edit_oprator.php?id=<?php echo $row['id']?>">Edit</a></td>
											
                                         
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
											<th>image</th>
											<th>link</th>
											<th>Action</th>
											
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
      