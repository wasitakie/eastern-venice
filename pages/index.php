 <?php //include '../coon/config.php' 
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="keywords" content="">
     <meta name="description" content="">

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
     <link rel="stylesheet" href="../boot/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
     <link rel="stylesheet" href="../slick/slick/slick.css">
     <link rel="stylesheet" href="../slick/slick/slick-theme.css">
     <link rel="stylesheet" href="../css/menuTop.css">
     <link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="../css/menu.css">
     <title>easten</title>
 </head>

 <body>
     <?php include  '../bannner/banner.php' ?>

     <div class="single-item">
         <div>
             <img src="https://scontent.fkdt3-1.fna.fbcdn.net/v/t39.30808-6/311521369_440217848219080_3278703255139881022_n.png?_nc_cat=107&ccb=1-7&_nc_sid=783fdb&_nc_ohc=hjxEk2ZQB_kAX_fDDNZ&_nc_ht=scontent.fkdt3-1.fna&oh=00_AfAvoz7yyWGGoyvdjbq00OSYO_9C8ZaszRSLk34tWULcHQ&oe=65BDEE71" width="100%" alt="" srcset="">
         </div>
         <div>
             <img src="https://images.unsplash.com/photo-1682687220161-e3e7388e4fad?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHx8" width="100%" alt="" srcset="">
         </div>
         <div>
             <h3>3</h3>
         </div>
         <div>
             <h3>4</h3>
         </div>
         <div>
             <h3>5</h3>
         </div>
         <div>
             <h3>6</h3>
         </div>
     </div>




     <div class="container-fluid" style="padding-left: 0px;">
         <div class="row">
             <div class="col-md-2">
                 <?php include '../menu/menu.php'; ?>
             </div>
             <div class="col-md-10">

             </div>
         </div>
     </div>

     <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
     <script src="../slick/slick/slick.min.js"></script>
     <script>
         $('.single-item').slick({
             arrows: true,
             autoplay: true,
             dots: true
         });
     </script>
 </body>

 </html>