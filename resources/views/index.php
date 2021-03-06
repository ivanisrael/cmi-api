<!DOCTYPE html>
<html ng-app="MyApp">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BRIS-GIS</title>
  <link href="favicon.ico" rel="shortcut icon">
  <link href="//fonts.googleapis.com/css?family=Roboto|Montserrat:400,700|Open+Sans:400,300,600" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="//cdn.jsdelivr.net/animatecss/3.2.0/animate.css" rel="stylesheet">
  <link href="app/stylesheets/angular-toastr.css" rel="stylesheet">
  <link href="app/stylesheets/styles.css" rel="stylesheet">
</head>
<body>
<div ng-controller="NavbarCtrl" ng-cloak class="navbar navbar-default navbar-static-top">
  <div class="navbar-header">
    <a class="navbar-brand" href="/#/"><i class="ion-ios7-pulse-strong"></i> <b>BRIS</b>-GIS</a>
  </div>
  <ul class="nav navbar-nav">
    <li ng-if="isAuthenticated()"><a href="/#/profile">Profile</a></li>
  </ul>
  <ul ng-if="!isAuthenticated()" class="nav navbar-nav pull-right">
    <li><a href="/#/login">Login</a></li>
  </ul>
  <ul ng-if="isAuthenticated()" class="nav navbar-nav pull-right">
    <li><a href="/#/logout">Logout</a></li>
  </ul>
</div>

<div ui-view></div>

<!-- Third-party Libraries -->
<script src="bower_components/angular/angular.js"></script>
<script src="bower_components/angular-animate/angular-animate.js"></script>
<script src="bower_components/angular-messages/angular-messages.js"></script>
<script src="bower_components/angular-resource/angular-resource.js"></script>
<script src="bower_components/angular-sanitize/angular-sanitize.js"></script>
<script src="bower_components/angular-ui-router/release/angular-ui-router.js"></script>
<script src="bower_components/angular-toastr/dist/angular-toastr.tpls.js"></script>
<script src="bower_components/satellizer/satellizer.js"></script>

<!-- Application Code -->
<script src="app/app.js"></script>
<script src="app/directives/passwordStrength.js"></script>
<script src="app/directives/passwordMatch.js"></script>
<script src="app/controllers/home.js"></script>
<script src="app/controllers/login.js"></script>
<script src="app/controllers/signup.js"></script>
<script src="app/controllers/logout.js"></script>
<script src="app/controllers/profile.js"></script>
<script src="app/controllers/navbar.js"></script>
<script src="app/services/account.js"></script>
</body>
</html>
