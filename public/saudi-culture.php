<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />    <meta name="author" content="simcoeit" />    
    <meta name="description" content="SBJR About Saudi Arabia, The Bank">
    <link rel="icon" type="image/png" href="images/fav.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>SBJR | Saudi Banks Joint Reception</title>
    <!-- Stylesheets & Fonts -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <style>
        .fullscreen
        {
            justify-content: center;
        }
        .active, .list_item:hover {
          border-color: 1px solid #fff;
        }
        #contact-us input
        {
            color: #fff;
        }
        #contact-us textarea
        {
            color: #fff;
        }
        .img_logo
        {
            padding: 10px;
            height: 110px;
        }
        .portfolio-item-wrap.border-check {
            border: solid 2px #39f321;
        }
    </style>
</head>

<body>

    <!-- Body Inner -->
    <div class="body-inner">


        <header id="header" data-transparent="true" data-fullwidth="true" class="dark" style="background: rgba(35, 74, 86, 0.2);">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo"> <a href="/"><span class="logo-default"><img class="img_logo" src="images/logo-w.png"></span><span class="logo-dark"><img class="img_logo" src="images/logo-w.png"></span></a> </div>
                    <!--End: Logo-->
                    <!--Header Extras-->
                    <div class="header-extras">
                     
                    </div>
                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu" class="menu-center">
                        <div class="container">
                            <nav id="navbar" class="navbar">
                                <ul id="menu_item">
                                    <li><a class="list_item scrollto" href="../#media">Back to Home</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->
        <!-- Gallery Grid -->
        <section id="gallery" class="fullscreen text-light background-colored" style="position: relative; padding-top:250px;">
            <div class="container grid-special justify-content-between" style="min-height:100%;">
                
                <h2 class=" text-left sec-hed">Saudi Culture</h2>
                
                <hr class="space">
                <div class="heading-text heading-line text-center no-mobile">
					<button type="button" onclick="doit()" class="btn btn-dark btn-icon-holder btn-light-hover">Download Selected Images<i class="fa fa-download"></i></button>
				</div>
                    
                <hr class="space">
                <div class="grid-layout portfolio-5-columns grid-loaded" data-margin="10">
				
                    <?php
                    $folder_path = 'images/media/saudi-culture/'; //image's folder path

                    $num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

                    $folder = opendir($folder_path);
                    
                    if($num_files > 0)
                    {
                        while(false !== ($file = readdir($folder))) 
                        {
                            $file_path = $folder_path.$file;
                            $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
                            if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
                            {
                            ?>
                                <!-- <a href="<?php //echo $file_path; ?>"><img src="<?php //echo $file_path; ?>"  height="250" /></a> -->
                                <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                                    <div class="portfolio-item-wrap">
                                        <div class="portfolio-image">
                                            <a href="#"><img src="<?php echo $file_path; ?>" alt=""></a>
                                        </div>
                                        <div class="portfolio-description">
                                            <a href="<?php echo $file_path; ?>" download><i class="fa fa-download"></i></a>
                                            <i class="fa fa-check-square mx-5 no-mobile" src="<?php echo $file_path; ?>"></i>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }?> 
                        <?php
                        
                    }
                    closedir($folder);
                    ?>
                    </div>
            </div>
        </section>
        <!-- end: Gallery -->
        
        <!-- FOOTER -->
        <footer class="inverted" id="footer" style="background-color:#0d102e;">
            <div class="copyright-content" style="background-color:#1E3F50;">
                <div class="container">
                    <div class="row">
                        <div class="copyright-text text-center" style="color:#fff;font-family:'lintel bold'"> &copy; 2023 Saudi Banks Joint Reception. All Rights Reserved. 
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end: FOOTER -->


    </div>
    <!-- end: Body Inner -->

    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>

    <!--Template functions-->
    <script src="js/functions.js"></script>
    <!-- Partical js base file  -->
    <script src="plugins/particles/particles.js" type="text/javascript"></script>
    <!--Particles-->
    <script src="plugins/particles/particles-dots.js" type="text/javascript"></script>
    <script>
        var header = document.getElementById("menu_item");
        var btns = header.getElementsByClassName("list_item");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace("active", "");
          this.className += " active";
          });
        }
    </script>
    <script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
          utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });

        $(window).scroll(function(){
          var sticky = $('#header'),
              scroll = $(window).scrollTop();

          if (scroll >= 100) sticky.addClass('header-scrolled header-sticky sticky-active');
          else sticky.removeClass('header-scrolled header-sticky sticky-active');
        });
        // $(".lines-button").click(function(){
        //     $(".lines-button.x").addClass("toggle-active");
        //     $("#mainMenu").addClass("menu-animate");
        //     $("#mainMenu").css("min-height", "345px");
        // });
        $(".list_item").click(function(){
          $("#mainMenu").removeClass("menu-animate");
          $(".iti-mobile").removeClass("mainMenu-open");
          $(".lines-button").removeClass("toggle-active");
          $("#mainMenu").css("min-height", "0px");
          $(".lines-button").removeClass("toggle-active");
        });
        
      </script>
      <script type="application/javascript">
          var mediaArray = [];
        var selectedMediasId;
        
        $(".portfolio-description i.mx-5").on("click", function (e) {
            e.preventDefault();
            var selected = $(this).attr('src');
            console.log('current selected', selected);
            if ($(this).hasClass('fa-check')) {
                $(this).removeClass('fa-check');
                $(this).addClass('fa-check-square');
                $(this).closest(".portfolio-item-wrap").removeClass('border-check');
                // remove deselected item from array
                mediaArray = $.grep(mediaArray, function (value) {
                    return value != selected;
                });
            }else {
                
                if (mediaArray.indexOf(selected) === -1) {
                    mediaArray.push(selected);
                }
                $(this).removeClass('fa-check-square');
                $(this).addClass('fa-check');
                $(this).closest(".portfolio-item-wrap").addClass("border-check");
            }
            selectedMediasId = mediaArray.join(",");
            console.log('all selected', selectedMediasId);
            e.preventDefault();
        });
        /* Download an img */
        function download(img) {
            var link = document.createElement("a");
            link.href = img;
            link.download = img;
            link.style.display = "none";
            var evt = new MouseEvent("click", {
                "view": window,
                "bubbles": true,
                "cancelable": true
            });
        
            document.body.appendChild(link);
            link.dispatchEvent(evt);
            document.body.removeChild(link);
            // mediaArray.splice(mediaArray.indexOf(img), 1);
            console.log("Downloading...");
        }
        
        
        function downloadAll(imgs) {
            console.log('all images to download', imgs)
            imgs.map((img)=>{
                console.log('img', img);
                console.log("IMG: " + img + " (", img, ")");
                download(img);
            })
            
        }
        function doit() {
            var imgs = mediaArray;
            downloadAll(imgs);
            
        }
        
        /* Create and add a "download" button */
        // function addDownloadBtn() {
        //     var btn = document.createElement("button");
        //     btn.innerText = "Download all images";
        //     btn.addEventListener("click", doit);
        //     btn.style.position = "fixed";
        //     btn.style.zIndex="999"
        //     btn.style.top = btn.style.left = "0px";
        //     document.body.appendChild(btn);
        // }
        // addDownloadBtn();
      </script>

</body>
</html>