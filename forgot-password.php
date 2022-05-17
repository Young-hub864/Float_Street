<?php include 'header.php' ?>
<style>
      .heading-text{
	  max-width: 400px;
      margin: 0 auto;
      margin-top: 7%;
  }
  .reset-btn{
	background-color:#f3525a;
		color: white;
		padding-top: 70px;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 90%;
}
.mail-input{
	padding: 12px 20px;
	margin: 8px 0;
	display:block;
	border: 1px solid #ccc;
	box-sizing: border-box;
	font-size: 16px;
	text-transform: none;
	width: 90%;
  }
    </style>
    <div class="container">
        <div class="heading-text">
            <h4 style="color: #000;font-size: 35px;letter-spacing: 1px;padding-bottom: 12px;">Forgot Your Password?</h4>
            <div class="input-email">
                <input class="mail-input" type="" placeholder="Enter Email" name="psw" required>
                <button class="reset-btn" type="submit">Reset Password</button>
            </div>
        </div>
    </div>

	<?php include 'footer.php' ?>