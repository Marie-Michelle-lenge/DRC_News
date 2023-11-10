<?php include("app/includes/headers.php");?>
<?php include("C:/xampp/htdocs/RDCNews/app/controllers/users.php");?>

<!DOCTYPE html>
<html lang="en">


<div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-dark px-lg-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-n2">
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#">Monday, January 1, 2045</a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#">Advertise</a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body small" href="#">Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 text-right d-none d-md-block">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-auto mr-n2">
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-twitter"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-facebook-f"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-linkedin-in"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-instagram"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-google-plus-g"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-youtube"></small></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>  
        <div class="row align-items-center bg-white py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="index.html" class="navbar-brand p-0 d-none d-lg-block">
                    <h1 class="m-0 display-4 text-uppercase text-primary1">RDC<span class="text-secondary font-weight-normal">News</span></h1>
                </a>
            </div>
            
        </div>
    </div>
    <!-- Topbar End -->
    
    <!-- Navbar Start -->
    <br><br><br>   <br><br>
    
<div class="container-fluid cadre-principal"> 
        <div class="container"> 
            <div class="row justify-content-md-center">
                <div style="display: flex; justify-content: center; align-items: center; height: 50vh;" >
                    <div class="card">
                     <!-- ERROR VALIDATION
                    <?php //if(count($errors) > 0): ?>
                            <div class="msg error">
                            <?php //foreach($errors as $error): ?>
                                <li><?php// echo $erro;?> </li>
                            <?php  //endforeach; ?>
                         <?php  //endif; ?> -->
                        <div class="card-block">
                        <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">REGISTER</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                        <form class="mt-3" action="app/controllers/users.php" method="post" id="login">
                        
                        <div class="form-group">
                            
                            <input style="width: 80vh; text-align: center;"  type="text" name="nom" id="username"
                                class="form-control"
                                value=""
                                placeholder="username">
                        </div><br>
                        <div class="form-group">
                            
                            <input style="width: 80vh; text-align: center;"  type="mail" name="email" id="username"
                                class="form-control"
                                value=""
                                placeholder="email">
                        </div><br>
                        <div class="form-group">
                            <input style="width: 80vh; text-align: center;" type="password" name="password" id="motdepasse" value=""
                                class="form-control"
                                placeholder="Mot de passe">
                        </div><br>
                        <div class="form-group">
                            <input style="width: 80vh; text-align: center;" type="password" name="passwordConfirme" id="motdepasse" value=""
                                class="form-control"
                                placeholder="confirmer le mot de passe">
                        </div><br>
                        
                        <button type="submit" name="register-btn" class="btn btn-primary btn-block mt-3" id="loginbtn">Connexion</button>
                    </form>
                    <a class="nav-link text-body small" href="login.php">Sing In</a>
                        </div>
                    </div>

                </div>

                
            </div>
                </div>
            </div> 
            <br>
            <br>
    </div>