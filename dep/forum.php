<!DOCTYPE html>
<html lang="en" ng-app>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DepEd</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/half-slider.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript">
    function FruitsController($scope){
        $scope.name="Anonymous"
        $scope.fruits=[];
        $scope.addFruit=function(){
            $scope.fruits.push($scope.newFruit);
        }
    }  
</script>
</head>

<body>

    <!-- Navigation --><div class="row-fluid">
                <div class="fill">
                    <img src="../assets/img/depedbanner.png" class="img-responsive" style="width: 100%; height: 250px;" alt="logo" />
                </div>

            </div>
    <div>
    <nav class="navbar navbar-inverse " role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">DepEd Leyte</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../index.html">Home</a>
                    </li>
                    <li>
                        <a class="dropdown-toggle" data-toggle="dropdown">About</a>
                      
                <ul class="dropdown-menu">
                    <li><a href="">Vision</a></li>
                    <li class="divider"></li>
                    <li ><a href="">Mission</a></li>
                    <li class="divider"></li>
                    <li><a href="">Core Values</a></li>
                    <li class="divider"></li>
                    <li><a href="">Mandate</a></li>
                    <li class="divider"></li>
                    <li ><a href="">Gallery</a></li>
                    <li class="divider"></li>
                    <li ><a href="">DepEd Leyte Hymn</a></li>
                </ul>
                    </li>
                    <li>
                        <a class="dropdown-toggle" data-toggle="dropdown">Department/Sections</a>
                      
                <ul class="dropdown-menu">
                    <li><a href="dep.html">Promotional Office</a></li>
                    <li class="divider"></li>
                    <li ><a href="personnel.html">Personnel</a></li>
                    <li class="divider"></li>
                    <li><a href="planning.html">Planning</a></li>
                    <li class="divider"></li>
                    <li><a href="records.html">Records</a></li>
                    <li class="divider"></li>
                    <li ><a href="budget.html">Budget</a></li>
                    <li class="divider"></li>
                    <li ><a href="finance.html">Finance</a></li>
                    <li class="divider"></li>
                    <li><a href="supply.html">Supply</a></li>
                    <li class="divider"></li>
                    <li><a href="med.html">Medical and Dental</a></li>
                    <li class="divider"></li>
                    <li><a href="als.html">ALS</a></li>
                    <li class="divider"></li>
                    <li><a href="ict.html">ICT</a></li>
                     <li class="divider"></li>
                    <li><a href="drrmc.html">DRRMC</a></li>
                </ul>

           
                    </li>
                     <li>
                        <a class="dropdown-toggle" data-toggle="dropdown">Issuance</a>
                      
                <ul class="dropdown-menu">
                    <li><a href="depedorders.html">DepEd Orders, Memo and Circulars</a></li>
                    <li class="divider"></li>
                    <li ><a href="regionalorders.html">Regional Orders, Memo and Circulars</a></li>
                    <li class="divider"></li>
                    <li><a href="divisionorders.html">Division Orders, Memo and Circulars</a></li>
                    
                </ul>
                    </li>
                     <li>
                        <a class="dropdown-toggle" data-toggle="dropdown">Let Us Know Your Concern</a>
                      
                <ul class="dropdown-menu">
                    <li><a href="map.html">Location</a></li>
                    <li class="divider"></li>
                    <li ><a href="forum.php">Forum</a></li>
                    <li class="divider"></li>
                    <li><a href="message.php">Message Us</a></li>
                    
                </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
       
    </nav>

</div>
    <!-- Half Page Image Background Carousel Header -->

    <!-- Page Content -->
    <div class="container">

      <div class="container">
        
            <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                
                    
                <h1 class="page-header">Forum<br>
                    <small></small>
                </h1>
                <div class="col-lg-3 col-md-offset-9" align="right">
                         <div class="row">
                             <div class="search">
                                <input type="text" class="form-control input-sm" maxlength="64" placeholder="Search" />
                                <button type="submit" class="btn btn-primary btn-sm">Search</button>
                             </div>
                          </div>
                    </div>  
            </div>
        </div>
        <!-- /.row -->
       
</div>
        <div class="row">
            <div class="col-md-7">
                <iframe src="../Webstorage.pdf" width="650" height="300" border="0"></iframe>
            </div>
            <div class="col-md-5">
                <h3>Promotions Report</h3>
                <h4>4/20/2015</h4>
                <p>This chapter describes Commerce reports that are focused on measuring performance for promotional efforts. By default, these reports are located in the ATG/Commerce/Promotions folder in the Reporting Center. If the report is used in a dashboard report, it may instead be found in ATG/Dashboard Content/Commerce/Promotions.</p>
                <a class="btn btn-success" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.1/angular.min.js"></script>
<div ng-controller="FruitsController">
    
    
    <hr/>
    <div class="row">
    
   <div class="col-lg-6">
   
   <h3> Enter Your Name : </h3><br> <input type="text" ng-model="name">
   <br>
    <br>
   <h3> Add Comment :</h3> <br>
        <textarea type="text" ng-model="newFruit" rows="4" cols="80"></textarea>
        <button class="btn btn-success" ng-click="addFruit()" >Post</button>
       </div>

       <div class="col-lg-6">

    <h3>Comments :</h3>
    <ul><div ng-repeat="fruit in fruits"> <h4>{{name}}: </h4>  {{fruit}}</div></ul>
   </div>
       </div> 
</div>
        <!-- /.row -->


        
        </div>    
        </div>

    
    
    
    
    
    
    <br>
    

        <!-- Footer -->
    
    <footer>
         <footer style="background-color: #46e031; padding:2em 1em 1em 2em">
            
            <div class="">
            <div class="row">
                <div class="col-md-4">
                    <p>Copyright &copy; Department of Education <br>Leyte Division 2015</p>    
                    
               
                </div>
                <div class="col-md-4">
                   <center>
                    <div class="">
                        <img src="../assets/img/3.png" style="height: 50px;">
                    </div>
                    </center>
                </div>
                 <div class="col-md-4" align="right">
                <span style="font-size:10px">FIND US ON : </span>
                <a class="link-logo" href="https://www.facebook.com/">
                    <img src="../assets/img/facebook.png" height="20" weight="20">
                </a>
                <a class="link-logo" href="http://instagram.com/"><img src="../assets/img/instagram.png" height="20" weight="20"></a>
                <a class="link-logo" href="https://twitter.com/">
                    <img src="../assets/img/twitter.png" height="20" weight="20">
                </a>
                <a class="link-logo" href="https://accounts.google.com/ServiceLogin?service=oz&passive=1209600&continue=https://plus.google.com/?gpsrc%3Dgplp0">
                    <img src="../assets/img/google-plus.png" height="20" weight="20">
                </a>        
                <a class="link-logo" href="http://www.youtube.com/">
                    <img src="../assets/img/y-t.png" height="20" weight="20">
                </a>  
            </div>
             </div>
                <center>
                
            </center>
             </div>
            <!-- /.row -->
        </footer>

            <!-- /.row -->
        </footer>

    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
