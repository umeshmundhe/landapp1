<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";

	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Umesh Mundhe</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Land</title>
      <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css">

	</head>
	<body>
		<?php include"navbar.php";?><br>
		<img src="img/11.jpg" style="margin-left:90px;" class="sha">
			<div id="section">
				<?php include"sidebar.php";?><br>
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content1">
<?php
						if(isset($_POST["submit"]))
						{
$sq="insert into customer(cust_name,cust_dob,mob_no,Gender,cust_address,land_taken,amt_paid,mod_of_payment,cheque_no,receipt_date)values('{$_POST["cname"]}','{$_POST["dob"]}','{$_POST["mobile_number"]}','{$_POST["gender"]}','{$_POST["address"]}','{$_POST["landtaken"]}','{$_POST["amt_paid"]}','{$_POST["paymentmode"]}','{$_POST["chequeno"]}','{$_POST["rec_date"]}')";
							if($db->query($sq))
							{
								echo "<div class='success'>Insert Success..</div>";
							}
							else
							{
								echo "<div class='error'>Insert failed..</div>";
							}

						}

					?>

				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					          <div class="container"></div>


          <h3>Customer details</h3>

          <table >
          <tr>
          <td>
            
          <!-- --------------Name------------- -->
          <label for="Full_Name">Full Name</label><br>
          </td><td>

          <input type="text" name="cname" id="cname"> <br>
          </td>
          <td>
          DATE OF BIRTH
          </td>
          <td><br><input type="Date" name="dob" value="Date"></td>
          </tr>
          <!----- Email Id ---------------------------------------------------------->
          <!--<tr>
          <td>EMAIL ID</td>
          <td><input type="text" name="Email_Id" maxlength="100" /></td>
          </tr>
          -->
          <!----- Mobile Number ---------------------------------------------------------->
          <tr>
          <td>MOBILE NUMBER</td>
          <td>
          <input type="text" name="mobile_number" maxlength="10" />
          (10 digit number)<br><br>
          </td>


          <!----- Gender ----------------------------------------------------------->

          <td>GENDER</td>
          <td>
          <select name="gender">
          <option value="male">Male</option>
          <option value="feMale">FeMale</option>  </tr>

            </select>
          </td>
          </tr>

          <!----- Address ---------------------------------------------------------->
          <tr>
          <td>ADDRESS <br /><br /><br /></td>
          <td><textarea name="address" rows="4" cols="30"></textarea></td>
          <td>
              Land Taken
            </td>
            <td>
              <input type="number" name="landtaken" value="0.5">
            </td>
</tr>
          <!-- Mod of payment -->
          <tr>
          <td>
            Amount
          </td>
          <td>
            <input type="number" name="amt_paid" value="amt">
          </td>
          <td>Mode of payment</td>
          <td>
            <form>
            <input type="radio" name="paymentmode" value="Cash" checked> Cash<br>
            <input type="radio" name="paymentmode" value="Cheque"> Cheque<br>
            </form>
          </td>
        </tr>

          </tr>
          <!-- Payment -->
          <tr>

          </tr>

          <!-- Cheque no -->
          <tr>
          <td>
            Cheque Number
          </td>
          <td>
            <input type="text" name="chequeno" value="">
          </td>


          <!----- Date of receipt ---------------------------------------------------------->
                    <td>
              DATE OF Receipt
            </td>
            <td>
              <input type="date" name="rec_date" value="Receipt_date">
            </td>
          </tr>

          <tr>
          <td colspan="2" align="center">
          <input type="submit" value="Submit" class="btn btn-primary" name="submit">
          <input type="reset" value="reset" class="btn btn-secondary">
          </td>
          </tr>
          </table>


				</div>


				<!--<div class="tbox">
					<h3 style="margin-top:30px;"> Plot Details</h3><br> -->


					</table>
				</div>
			</div>

				<?php include"footer.php";?>
	</body>
</html>
