<?php
include("partials/_headlinks.php");
?>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">

                <?php include("partials/_sidebar.php"); ?>

            </div>

            <div class="span9">
                <div class="content">
                    <div class="btn-controls " style="background-color: white; padding:20px ">
                        <h4>NEW RECHARGE</h4>
                        <form class="form-horizontal row-fluid" action="form_sub.php" method="POST">
                            <div class="control-group">
                                <label class="control-label" for="basicinput">Oprator</label>
                                <div class="controls">
                                    <select tabindex="1" name="oprator" class="span8" class="target" required>
                                        <option  disabled>_____________________________Select Oprator________________________</option>
                                        <?php

                                        $sql = "SELECT * FROM oprator";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {



                                        ?>
                                                <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Select plan</label>
                                <div class="controls " style="display: flex;">
                                    <label class="radio">
                                        <input type="radio" name="a1" class="changer" value="postpaid" >
                                        Postpaid
                                    </label>
                                    <label class="radio" style="top: 6px;position:relative;margin-left:2%">
                                        <input type="radio" name="a1" class="changer" value="prepaid">
                                        Prepaid
                                    </label>

                                </div>
                            </div>

                            <div id="selected" class="control-group">

                            </div>
                            <div class="control-group">
                                <label class="control-label" for="basicinput">Enter Mobiel no</label>
                                <div class="controls">
                                    <input type="text" id="basicinput" name="m_no" placeholder="Type something here..." class="span8" required>

                                </div>
                            </div>
                            <div class="control-group" class="hide_amount">
                                <label class="control-label" for="basicinput">Enter Amount</label>
                                <div class="controls">
                                    <input type="number" name="amount" id="basicinput" placeholder="Type something here..." class="span8" required>

                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button type="button"  class="load_card btn btn-lg btn-info">procced to pay</button>
                                </div>
                            </div>
                            <br>
                                    </hr>
                                    <div class="selected_card"> 
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
<?php include("partials/_footer.php") ?>


<script>
    $('.changer').click(function(e) { //jQuery works on clicking radio box
        var value = $(this).val(); //Get the clicked checkbox value
        var con = $('.r-text').html(value);
        if (value == "postpaid") {

            $.ajax({
                url: "load-div-empty.php",
                type: "post",
                //    data:Stringify(),
                success: function(data) {
                    $('#selected').html(data)
                    var remove = $(".optr_name").remove().attr(name);
                    var removeamount = $(".amount").remove().attr(name);
                    console.log(remove)
                    console.log(removeamount)
                }

            });

        } else if (value == "prepaid") {

            $.ajax({
                url: "load-div.php",
                type: "post",
                //    data:Stringify(),
                success: function(data) {
                    $('#selected').html(data)
                    var empty='';
                    $('.hide_amount').remove();
                    console.log(data)
                }
            })

        }
    });
    $('.load_card').click(function(e) {

        $.ajax({
                url: "load-div-card.php",
                type: "post",
                //    data:Stringify(),
                success: function(data) {
                    $('.selected_card').html(data)
                    console.log(data)
                }
            })

    });
</script>
</body>

</html>