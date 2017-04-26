<!DOCTYPE html>
<html ng-app="myApp">
  <head>
    <meta charset="utf-8">
      <title>Travelan</title>
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular-animate.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="animate.css">
      <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
   </head>
  <body>

    <nav id="nav" class="navbar navbar-default navbar-fixed-top">
     <div class="container">
        <div class="row">
           <div class="col-md-2">
           <a href="#" class="logo">Travelan</a>
           <span class="slogan">good plan for your travel</span>
           </div>
           <div class="col-md-6">
              <input type="text" class="form-control" aria-label="" placeholder="Rechercher">
           </div>
           <div class="row">
           <div class="col-md-4">
             <div  ng-controller="personCtrl">
             <a href="#" ng-click="ShowHide()"><i class="fa fa-bars" aria-hidden="true"></i></a>
             <div  href="#" ng-show="IsVisible">
               <div class="idea">
                <h2>De l'inspiration pour vos voyages</h2>
                <p>Plein air</p>
                <p>Mer & Soleil</p>
                <p>Casinos</p>
                <p>En famille</p>
                <p>Culture</p>
                <p>En amoureux</p>
                <p>Ski-Montagne</p>
                <p>Bien-être</p>
                 </div>
               </div>
               <div class="">
              <a href="#" ng-click="toggle()"><i  class="fa fa-user-circle" aria-hidden ="true"></i></a>
              </div>
              <div class="dropconnect" href="#" ng-show="myVar">
              <a class="linkconnect" ng-click="myFunc()" href="#">Se Connecter</a>
              <div class="modal-dialog" ng-show="showMe">
                  <div class="message-box">
                    <div class="modal-main">
                      <h1 id="contact">Bienvenue sur Travelan !</h1><br><br>

                      <div class="form-group">
                          <input type="email" class="formControl" id="exampleInputEmail1" placeholder="Email">
                          <input type="email" class="formControl" id="exampleInputEmail1" placeholder="password">

                      </div>
                      <a href="#" class="btn-send">ENVOYER</a><br>
                      <p>Or continue with</p><br>
                      <a href="#" class="btn-facebook">FACEBOOK</a><br>
                      <a href="#" class="btn-google">GOOGLE</a>

                    </div>
                  </div>
            </div>

              <a class="linkconnect1" href="#">Inscription</a>
              </div>
           </div>
           </div>
     </div>
    </div>
  </nav>



<div class="container cardshare">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card" >
                    <img class="card-img-top" src=https://a0.muscache.com/im/pictures/5573ea72-ef35-4fdd-a2a8-8216a3d9e394.jpg>
                    <div class="card-block" >
                        <h5 class="text-bold">title</h5>
                        <p>description</p>
                    </div>
                </div>
            </div>




            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top" src=https://a0.muscache.com/im/pictures/08b26b83-d2d3-45e9-919d-76931c3eb3a1.jpg>
                    <div class="card-block">
                        <h5 class="text-bold">Title</h5>
                        <p>Description</p>
                    </div>
                    <div class="card-footer">
                        <span class="float-right">Joined in 2013</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top" src=https://a0.muscache.com/im/pictures/03ee2ce2-782e-42f3-b3c2-7cf85b3cd6c9.jpg>
                </div>
                <div class="card-block">
                    <h5 class="text-bold">Title</h5>
                    <p>Description</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top" src=https://a0.muscache.com/im/pictures/b7508c4c-eec0-4857-b218-ecf653cc0736.jpg>
                    <div class="card-block">
                        <h5 class="text-bold">Title</h5>
                        <p>Description</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="container cardshare">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="card" >
                            <img class="card-img-top" src=https://a0.muscache.com/im/pictures/5573ea72-ef35-4fdd-a2a8-8216a3d9e394.jpg>
                            <div class="card-block" >
                                <h5 class="text-bold">title</h5>
                                <p>description</p>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="card">
                            <img class="card-img-top" src=https://a0.muscache.com/im/pictures/08b26b83-d2d3-45e9-919d-76931c3eb3a1.jpg>
                            <div class="card-block">
                                <h5 class="text-bold">Title</h5>
                                <p>Description</p>
                            </div>
                            <div class="card-footer">
                                <span class="float-right">Joined in 2013</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="card">
                            <img class="card-img-top" src=https://a0.muscache.com/im/pictures/03ee2ce2-782e-42f3-b3c2-7cf85b3cd6c9.jpg>
                        </div>
                        <div class="card-block">
                            <h5 class="text-bold">Title</h5>
                            <p>Description</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="card">
                            <img class="card-img-top" src=https://a0.muscache.com/im/pictures/b7508c4c-eec0-4857-b218-ecf653cc0736.jpg>
                            <div class="card-block">
                                <h5 class="text-bold">Title</h5>
                                <p>Description</p>
                            </div>
                        </div>
                    </div>
                </div>







    <script type="text/javascript" src="view/js/app.js"></script>
    <script type="text/javascript" src="view/js/jsquery.js"></script>

  </body>
</html>
