<?php if($_SESSION['login'])
{?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
			<li class="prnt"><a href="profile.php">My Profile</a></li>
				<li class="prnt"><a href="change-password.php">Change Password</a></li>
			<li class="prnt"><a href="tour-history.php">My Tour History</a></li>
			<li class="prnt"><a href="issuetickets.php">Raised Tickets</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Welcome :</li>				
			<li class="sig"><?php echo htmlentities($_SESSION['login']);?></li> 
			<li class="sigi"><a href="logout.php" >/ Logout</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div><?php } else {?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
				<li class="hm"><a href="admin/index.php">Admin Login</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Toll Number : (012) 358 9999</li>				
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a></li> 
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" ><span>/ Sign In</span></a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div>
<?php }?>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php">Tshwane <span>Find</span></a>	
			<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			<li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">SAFE &amp; SECURE </div></li>
			<div class="clearfix"></div>
		</div>
		</div>

		
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
    

    
    <!-- Dropdown for Multilingual Languages -->
    <li>
        <label for="language-select">Language:</label>
        <select id="language-select">
		<option value="en">English</option>
            <option value="af">Afrikaans</option>
            <option value="zu">Zulu</option>
            <option value="xh">Xhosa</option>
            <option value="st">Sotho</option>
            <option value="ts">Tswana</option>
            <option value="ve">Venda</option>
            <option value="tn">Setswana</option>
            <option value="pt">Portuguese</option>
            <option value="fr">French</option>
            <option value="de">German</option>
            <option value="es">Spanish</option>
            <option value="it">Italian</option>
        </select>
    </li>

    <!-- Speaker Icon -->
    <li>
        <i class="fa fa-volume-up" id="speaker-icon" onclick="showLanguageSquares()" style="cursor: pointer; font-size: 40px;"></i>
    </li>
    
    <div class="clearfix"></div>
	
</div>

<!-- Hidden Language Squares that appear when speaker is clicked -->
<div id="language-squares" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999;">
    <div style="width: 100px; height: 100px; background-color: #f0f0f0; border: 1px solid #ccc; display: inline-block; text-align: center; line-height: 100px;">
        English
    </div>
    <div style="width: 100px; height: 100px; background-color: #f0f0f0; border: 1px solid #ccc; display: inline-block; text-align: center; line-height: 100px;">
        seTswana
    </div>
    <div style="width: 100px; height: 100px; background-color: #f0f0f0; border: 1px solid #ccc; display: inline-block; text-align: center; line-height: 100px;">
        isiZulu
    </div>
    <div style="width: 100px; height: 100px; background-color: #f0f0f0; border: 1px solid #ccc; display: inline-block; text-align: center; line-height: 100px;">
        Afrikaans
    </div>

</div>

<script>
    function showLanguageSquares() {
        const squares = document.getElementById('language-squares');
        squares.style.display = squares.style.display === 'none' ? 'block' : 'none';
    }
</script>

	
    <div class="clearfix"></div>
</div>

	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="tshwaneServices.php">Tshwane Services</a></li>
							<li><a href="page.php?type=aboutus">About</a></li>
								<!-- <li><a href="package-list.php">Tour Attractions</a></li> -->
								<li><a href="page.php?type=privacy">Privacy Policy</a></li>
								<!-- <li><a href="page.php?type=terms">Terms of Use</a></li> -->
								<li><a href="page.php?type=contact">Contact Us</a></li>
								<?php if($_SESSION['login'])
{?>
								<li>Need Help?<a href="#" data-toggle="modal" data-target="#myModal3"> / Write Us </a>  </li>
								<?php } else { ?>
								<li><a href="enquiry.php"> Enquiry </a>  </li>
								<?php } ?>
								<div class="clearfix"></div>

						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->	
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>