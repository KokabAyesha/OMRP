
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
                            <h4>Add oprator</h4>
                            <hr>
                            <form class="form-horizontal row-fluid" action="form_sub.php" method="POST" enctype="multipart/form-data">
                            <?php 
                                         $id=$_GET['id'];
                                        $sql = "SELECT * FROM oprator where id='$id'";
                                        $result = $conn->query($sql);
                                        
                                        
                                          // output data of each row
                                          while($row = $result->fetch_assoc()) {
                                           
                                         ?>

                                      
										<div class="control-group">
											<label class="control-label" for="basicinput">Name</label>
											<div class="controls">
												<input type="text" id="name" name="name" required value="<?php echo $row['name']?>" class="span8">
												
											</div>
										</div>
                                      
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Address link</label>
											<div class="controls">
                                              <input type="hidden" name="id" value="<?php echo $id;?>">
												<input type="text" id="address" name="link" value="<?php echo $row['link']?>" class="span8">
												
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">image</label>
											<div class="controls">
												<input type="file" id="img" name="img"  value="<?php echo $row['img']?>" required class="span8">
												
											</div>
										</div>

								
								<?php
                                }
                                
                                ?>
										<div class="control-group">
											<div class="controls">
												<button type="submit" name="Edit_oprator" class="btn btn-lg btn-info">Save</button>
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