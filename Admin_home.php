

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
                            
                                <form class="form-horizontal row-fluid">
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Select oprator</label>
                                            <div class="controls">
                                                <select tabindex="1" data-placeholder="Select here.." class="span8">
                                                    <option value="" selected disabled>Select here..</option>
                                                    <option value="Category 1">Credit</option>
                                                    <option value="Category 2">Debit</option>
                                                    
                                                    
                                                </select>
                                            </div>
                                        </div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Enter Mobiel no</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Type something here..." class="span8">
												<span class="help-inline">Minimum 5 Characters</span>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Enter Amount</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Type something here..." class="span8">
												<span class="help-inline">Minimum 5 Characters</span>
											</div>
										</div>

									

								
								
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn">procced to pay</button>
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
      