<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Auto Irrigate Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="login-bg">
        <nav class="navbar navbar-expand-lg navbar-custom navbar-dark fixed-top pt-1 pb-1">
            <div class="container-fluid" style="padding: 0rem .5rem 0rem .25rem">
                <img src="images/sugar-cane-logo.png" class="" alt="logo" width="50" style="margin-left: -.5rem;">
                <a class="navbar-brand" href="#" style="font-size: 13pt;">Auto Furrow Irrigation System</a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav" style="margin-right: -.5rem;">
                    <ul class="navbar-nav menu-items">
                        <li class="nav-item">
                            <div class="d-flex align-items-center" style="margin: 0rem .5rem;">
                                <a class="nav-link active p-1" aria-current="page" href="index.php">Login</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="d-flex align-items-center" style="margin: 0rem .5rem;">
                                <a class="nav-link p-1" aria-current="page" href="about.php">About</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

		<div id="body-content">
            <div class="login-textfield-bg rounded-3" style="padding: 3rem 0;">
                <div class="logo d-flex align-items-end justify-content-center mb-3">
                    <img src="images/auto-furrow.png" alt="logo" height="170px">
                </div>
                <div>
                <center>
                    <form action="" method="POST">
                        <div class="input-field">
                            <input type="text" name="username" placeholder="" class="mb-2" autocomplete="off"> 
                            <label>Username</label>
                        </div>

                        <div class="input-field">
                            <input type="password" name="password" placeholder="" class="mb-2"> 
                            <label>Password</label>
                        </div>
                        <button type="submit" name="loginSubmit" class="btn btn-primary"><a href="admin/homepage.php">Login</a></button>
                    </form>
                </center>
                </div>
                <div class="divider"></div>
                <div class="about">
                	<a href="about.php">
                		<h3>About</h3>
                	</a>
                </div>
            </div>
        </div>
	</div>
</body>
</html>