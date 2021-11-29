<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Login </title>
    <?php include "head.html"; ?>
</head>
<body>
<?php include "header.html"; ?>
    <div class="form-background">
        <video autoplay loop muted style="max-width: 100%; height: auto;">
            <source src="ycp.mp4" type="video/mp4"/>
        </video>
    </div>
    <!-- for form container -->
    <div class="form-container">
        <h2> Login </h2>
        <form action="login-process.php" method="POST">
            <div class="form-item">
                <span class="material-icons-outlined">
                    account_circle
                </span>
                <input type="text" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="form-item">
                <span class="material-icons-outlined">
                    lock
                </span>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <button type="submit">LOGIN</button> 
        </form>
    </div>
    <?php include "footer.html"; ?>
    <script>
		$('.handle').on('click', function() {
			$('nav ul').toggleClass('showing');
		});
	</script>
</body>
</html>