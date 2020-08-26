 <?php 
        require 'config.php';

   // $link_connexion = new PDO("mysql:host=127.0.0.1;dbname=fan","root","");

        if (isset($_POST['login'])) {

            if (isset($_POST['username']) AND isset($_POST['password']) 
                AND !empty($_POST['username']) AND !empty($_POST['password']))
             {
                $user = htmlspecialchars($_POST['username']);
                $pass = md5(htmlspecialchars($_POST['password']));
                        # code...
                $sel = $link_connexion->prepare(" SELECT * FROM users WHERE user=? AND password=? ");
                $sel->execute(array($user,$pass));
               // $sel_fetch = $sel->fetchAll();
                $sel_row = $sel->rowCount();

                if ($sel_row == 1) {

                        
                         echo " <div class='alert alert-success alert-with-icon alert-dismissible fade show' data-notify='container'>
                          <button type='button' aria-hidden='true' class='close' data-dismiss='alert' aria-label='Close'>
                            <i class='nc-icon nc-simple-remove'></i></button>
                          <span data-notify='icon' class='nc-icon nc-bell-55'></span>
                          <span data-notify='message'> Identification a été prise en compte ...</span>
                        </div>";
                        header("Location: accueil.php");
                        
                } 
                else {

                    
                    echo " <div class='alert alert-warning alert-with-icon alert-dismissible fade show' data-notify='container'>
                          <button type='button' aria-hidden='true' class='close' data-dismiss='alert' aria-label='Close'>
                            <i class='nc-icon nc-simple-remove'></i></button>
                          <span data-notify='icon' class='nc-icon nc-bell-55'></span>
                          <span data-notify='message'> Nom d'utilisateur/ Mot de passe sont incorretent ...</span>
                        </div>";
                    
                }
            
             }  
             else {
                 echo " <div class='alert alert-danger alert-with-icon alert-dismissible fade show' data-notify='container'>
                          <button type='button' aria-hidden='true' class='close' data-dismiss='alert' aria-label='Close'>
                            <i class='nc-icon nc-simple-remove'></i></button>
                          <span data-notify='icon' class='nc-icon nc-bell-55'></span>
                          <span data-notify='message'>Veuillez remplir les champs de saisir svp ...</span>
                        </div>";
             }      
        }


?>



<div class="content" style="">
        <div class="row">
           <div class="col-md-3"></div>
           <div class="col-md-6">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Connectez vous </h5>
              </div>
              <div class="card-body">
                <form method="POST" action="">
                  <div class="row">
                   
                    <div class="col-md-12 px-1">
                      <div class="form-group">
                        <label> Nom d'utilisateur</label>
                        <input type="text" autocomplete="off" class="form-control" 
                        placeholder=" Nom d'utilisateur ..."
                         name="username" id="username">
                      </div>
                    </div>
                    <div class="col-md-12 px-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1"> Mot de passe</label>
                        <input type="password" class="form-control" placeholder=" Mot de passe ..."  
                        name="password" id="password">
                      </div>
                    </div>
                  </div>
                 
              
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button class="btn btn-primary btn-round" name="login"> Valider</button>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
           <div class="col-md-3"></div>
        </div>
</div>
 