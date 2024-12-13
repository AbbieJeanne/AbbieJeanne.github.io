<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
	<nav id="project-sites-nav">
		<!--<a href="../index.php"><i class="fas fa-angle-left"></i></a>-->
	    <div id="project-sites-title">USER MANAGEMENT</div>
        <a href="../index.php"><i class="fas fa-sign-out-alt"></i></a>
	</nav>

    <div class="login-bg reg-mobile-bg ">
        <div class="d-flex justify-content-end">
            <button class="new mx-3" data-bs-toggle="modal" data-bs-target="#addUserModal" style="margin-top: 70px; margin-bottom: -70px;">ADD USER</button>
        </div>
        <div id="data">
            <div class="card col-lg-6 rounded-3 m-5 responsive-card">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Role</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <tr>
                                <td>1</td>
                                <td>Abbie Jeanne Lim</td>
                                <td>abbie</td>
                                <td>admin</td>
                                <td class="text-center justify-content-center align-item-center">
                                    <button class="btn btn-sm btn-primary mx-1" id="editBtn" style="height: 30px; width: 30px; background-color: #16423C;">
                                      <i class="action bi bi-pencil-square" onclick=""></i>
                                    </button>

                                    <form id="" 
                                      action="" 
                                              method="POST" 
                                              style="display:inline;">
                                        <input type="hidden" name="id" value="">
                                        <button type="button" class="btn btn-sm btn-danger mx-1" onclick="" style="height: 30px; width: 30px;">
                                          <i class="action bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-primary fixed-bottom" style="border-radius: 20px; background-color: #16423C;">
        <a href="homepage.php">
        	Go To Project Sites <i class="fas fa-angle-right"></i>
        </a>
    </button>

</body>
</html>