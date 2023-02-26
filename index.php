<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="style4.css">
</head>
<body>
    <div class="card">
        <form action="login.php" method="post">
    <h2 class="log">LOGIN</h2>
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    
    <label>User Name:</label><br>
    <input type="text" name="uname" placeholder=""><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" placeholder=""><br>
    
    <button class="custom-btn btn-1">
    <a href="/saadproject/index2.php" > Log In</a>
    </button>
    
    </form>
    </div>
    
</body>
</html>