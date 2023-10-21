
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
                            <h4>PROVIDE FEEDBACK</h4>
                            <hr>
                                <form class="form-horizontal row-fluid" action="form_sub.php" method="POST">
                                      
										<div class="control-group">
											<label class="control-label" for="basicinput">Name</label>
											<div class="controls">
												<input type="text" id="name" name="name" placeholder="Type something here..." class="span8">
												
											</div>
										</div>

                                        <div class="control-group">
											<label class="control-label"  for="basicinput">Feedback</label>
											<div class="controls">
												<textarea class="span8" rows="5" name="feedback"></textarea>
											</div>
										</div>

								
								
										<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit_feedback" class="btn">Submit feedback</button>
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