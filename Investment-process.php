<?php include 'invest-header.php' ?>
<style>
      .contain-field{
	padding: 39px 29px;
  }
  input[type=name] {
	width: 64%;
	padding: 12px 20px;
	margin: 8px 0;
	display:block;
	border: 1px solid #ccc;
	box-sizing: border-box;
	font-size: 16px;
	text-transform: none;
  }

  input[type=number] {
	width: 64%;
	padding: 12px 20px;
	margin: 8px 0;
	display:block;
	border: 1px solid #ccc;
	box-sizing: border-box;
	font-size: 16px;
	text-transform: none;
  }

  input[type=tel] {
	width: 64%;
	padding: 12px 20px;
	margin: 8px 0;
	display:block;
	border: 1px solid #ccc;
	box-sizing: border-box;
	font-size: 16px;
	text-transform: none;
  }

  input[type=date] {
	width: 64%;
	padding: 12px 20px;
	margin: 8px 0;
	display:block;
	border: 1px solid #ccc;
	box-sizing: border-box;
	font-size: 16px;
	text-transform: none;
  }
  .invest-btn{
	   background-color:#f3525a;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 64%;
		outline: none;
}
.alt-text{
	  font-weight: 600;font-size: 18px;padding-bottom: 15px;padding-left: 15px;
  }
  
  .invest-offerings{
	padding: 68px 29px;
	
  }
    </style>
    <body style="background-color:#F1F3F6;">
        <div class="container">
            <div class="row">
                <div style="border-right: 1px solid #ccc;" class="col-md-6">
                    <div class="contain-field">
                        <h4 class="text-b">Floatstreet Online Edutional<br>Services</h4>
                        <div class="input-fields">
                            <div class="email-input">
                                <input type="name" placeholder="Investor's Name" name="psw" required>
                            </div>
                            <div class="amount-input">
                                <input type="number" placeholder="Amount" name="Amount" required>
                            </div>
                            <div style="padding-top:10px" class="payment-details">
                                <h4 class="text-b">Card Details</h4>
                                   <input type="tel"  maxlength="21" placeholder="xxxx xxxx xxxx xxxx" name="Amount" required>
                                   <input type="date" placeholder="MM / YY" name="name" required>
                                   <input type="name" placeholder="CVC" name="" required>
                            </div>
                            <button class="invest-btn" type="submit">Invest</button>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="invest-offerings">
                        <h4 style="color: #000;">Realize your next level with alternative<br> investments across multiple asset<br> classes.</h4>
                        <p class="alt-text">Join over 250k members from all 50 states</p>
                        <p class="alt-text">$1.3B invested on the platform to date</p>
                        <p class="alt-text">$750M total interest & principal returned to<br>investors</p>
                        <p class="alt-text">12.15% NET IRR 7</p>
                    </div>
                </div>   
            </div>
        </div>

        <?php include 'footer.php' ?>