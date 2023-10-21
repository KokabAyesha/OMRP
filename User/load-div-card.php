<?php
     $str = "<h4 >CARD PAYMENT</h4>

     <div class='control-group '>
             <label class='control-label' for='basicinput'> Name Of card</label>
                     <div class='controls'>
                     <input type='text' id='basicinput' name='card_name' class='changer' required>
                     </div>  
             </div>
             <div class='control-group '>
             <label class='control-label' for='basicinput'> Card no</label>
                     <div class='controls'>
                     <input type='text' id='basicinput' name='card_no' class='changer'required>
                     </div>
             </div>
             <div class='control-group '>
             <label class='control-label' for='basicinput'> DATE</label>
                     <div class='controls'>
                     <input type='date' id='basicinput' name='exp_date' class='changer'required>
                     </div>
             </div>
             <div class='control-group '>
             <label class='control-label' for='basicinput'>Cvv no</label>
                     <div class='controls'>
                     <input type='text' id='basicinput' name='cvv_no' class='changer' required>
                 
             </div>
         </div>
         <div class='control-group'>
                                <div class='controls'>
                                    <button type='submit' name='proceed_pay' class=' btn btn-lg btn-info'>Recharge  now</button>
                                </div>
                            </div>
                            ";
         echo $str;


    
?>