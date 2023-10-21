
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
                            <div class="btn-controls " style="background-color: white; padding:20px ">
                            <h4>Add Offer</h4>
                            <hr>
                                <form class="form-horizontal row-fluid" action="form_sub.php" method="POST" enctype="multipart/form-data">
                                      
										<div class="control-group">
											<label class="control-label" for="basicinput">Oprator</label>
                                            <div class="controls">
                                                <select tabindex="1"  name="optr_name" class="span8" required>
                                                    <option  selected disabled>_______________________Select Oprator________________________</option>
													<?php 
                                                     
                                                    $sql = "SELECT * FROM oprator";
                                                    $result = $conn->query($sql);
                                                    
                                                    if ($result->num_rows > 0) {
                                                      // output data of each row
                                                      while($row = $result->fetch_assoc()) {
                                                       
                                                     
                                                    
                                                    ?>
                                                    <option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
													<?php
                                                      }
                                                    }
                                                    ?>
												</select>
											</div>
										</div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">image</label>
											<div class="controls">
                                                <input type="file" id="img" name="img" required class="span8">
												
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Description</label>
											<div class="controls">
												<textarea class="span8"name="desc" rows="5" required></textarea>
											</div>
										</div>
								
								
										<div class="control-group">
											<div class="controls">
												<button type="submit" name="save_offer" class="btn btn-lg btn-info">Save</button>
											</div>
										</div>
									</form>
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
      
    </body>
</html>