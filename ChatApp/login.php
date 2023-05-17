<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
 
    
        <div class="wrapper" data-tilt data-tilt-scale="1.1">
        <section class="form login">
          <header>Sparrow Post Sign up</header>
          <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>
            <div class="field input">
              <label>Email Address</label>
              <input type="text" name="email" placeholder="Enter your email" required>
            </div>
            <div class="field input">
              <label>Password</label>
              <input type="password" name="password" placeholder="Enter your password" required>
              <i class="fas fa-eye"></i>
            </div>
            <div class="field button">
              <input type="submit" name="submit" value="Continue to Chat">
            </div>
          </form>
          <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
        </section>
      </div>
    
      
  
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.0/vanilla-tilt.min.js" integrity="sha512-RX/OFugt/bkgwRQg4B22KYE79dQhwaPp2IZaA/YyU3GMo/qY7GrXkiG6Dvvwnds6/DefCfwPTgCXnaC6nAgVYw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    VanillaTilt.init(document.querySelector(".wrapper"), {
		max: 25,
		speed: 400,
    
	});
  </script>

</body>
</html>
