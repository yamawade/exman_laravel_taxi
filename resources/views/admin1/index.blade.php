<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>



<body>

<!-- <div class="login-page bk-img" style="background-image: url(admin/img/adminlogin.jpg);">
	<div class="form-content">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1 class="text-center text-bold text-light mt-4x">Admin login</h1>
					<div class="well row pt-2x pb-3x bk-light">
						<div class="col-md-8 col-md-offset-2">
							<label for="" class="text-uppercase text-sm">Your Username </label>
							<input id="name" type="text" placeholder="Username" name="username" class="form-control mb">

							<label for="" class="text-uppercase text-sm">Password</label>
							<input id="pasword" type="password" placeholder="Password" name="password" class="form-control mb">
							
							<button class="btn btn-primary btn-block"  onclick="loginadmin()">LOGIN</button>
							<p id="demo"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->
<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
  <h4 class="fw-normal mb-3 pb-3 offset-6 uppercase text-white" style="letter-spacing: 1px;">Admin Login</h4>
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form>
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0 text-warning offset-3">E-Taxibokko</span>
                  </div>
				  
                  <div class="form-outline mb-4">
				   <label class="form-label" for="">Identifiant</label>
				  	<input id="name" type="text" placeholder="Identifiant" name="username" class="form-control mb" required>
                  </div>

                  <div class="form-outline mb-4">
				  	<label class="form-label" for="">Mot De Passe</label>
				  	<input id="password" type="password" placeholder="Mot de Passe" name="password" class="form-control mb" required>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="button" onclick="loginadmin()">Login</button>
					<p id="demo"></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script>
function loginadmin(){

var name = document.getElementById("name").value;
var password = document.getElementById("password").value;

if(name == "yama" && password == "passer@123"){

    window.location.href = "/dashboardAdmin";
}
if(name != "yama" && password != "passer@123"){

document.getElementById("demo").innerHTML = "Vous n'etes pas admin!!!";
}
if(name == "" && password == ""){

document.getElementById("demo").innerHTML = "Tous les champs sont oblogatoire !!!";
}
}

</script>
	<!-- Loading Scripts -->
	<script src="admin/js/jquery.min.js"></script>
	<script src="admin/js/bootstrap-select.min.js"></script>
	<script src="admin/js/bootstrap.min.js"></script>
	<script src="admin/js/jquery.dataTables.min.js"></script>
	<script src="admin/js/dataTables.bootstrap.min.js"></script>
	<script src="admin/js/Chart.min.js"></script>
	<script src="admin/js/fileinput.js"></script>
	<script src="admin/js/chartData.js"></script>
	<script src="admin/js/main.js"></script>

</body>

</html>
