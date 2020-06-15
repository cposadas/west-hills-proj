<!doctype html>
<html class="no-js" lang="EN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>West Hills College</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/src/app.css">
    </head>
    <body>
        <div class="site js-site" id="site">
            <?php require_once './partials/header.php' ?>
            <main class="site__main-content js-main-content">
                <?php
                    require_once './partials/bootstrap-page-full.php';
                ?>                
            </main>            
            <?php require_once './partials/footer.php' ?>            
        </div>
        <script type="text/javascript" src="assets/js/dist/app.min.js"></script>
        <script>
          $(document).ready(function(){
            var showToast = false;
            var currentDate = new Date();
            var userDate = currentDate;
            var startDate = new Date("12/13/2019 00:00:01"); 
            var endDate = new Date("1/6/2020 00:00:01");
            var expDate = new Date((new Date()).valueOf() + 1000*3600*120); //24hrs*5days = 120
            //var expDate = new Date((new Date()).valueOf() + 1000*3600*.01);
                                
            if(currentDate > startDate && currentDate < endDate){
              //within holiday hours
              //console.log('currentDate:'+currentDate);              
              if(localStorage.getItem('wh_Toast')!==null){                
                userDate = new Date(localStorage.getItem('wh_Toast'));
                //console.log('userDate:'+userDate);
              }
              
              if(currentDate >= userDate ){
                //console.log("currentDate ("+currentDate+") >= userDate ("+userDate+")");   
                showToast = true;
                if(typeof(Storage)!=="undefined"){
                  localStorage.setItem("wh_Toast", expDate);
                  //console.log("localStorage: "+localStorage.getItem("wh_Toast"));
                }
              } else {
                //console.log("toast WAS previously shown and not expired");
              }
              
              if(showToast){
                $('.toast').toast({delay: 10000});
                $('.toast').toast('show');
              }
            }            
          });
        </script>
    </body>
</html>