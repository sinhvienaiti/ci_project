<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>acset/css/english.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>acset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>acset/css/bootstrap-theme.min.css ">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
    <script language="javascript" src="<?php echo base_url(); ?>acset/js/jquery-1.9.1.js"></script>
    <script language="javascript" src="<?php echo base_url(); ?>acset/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url(); ?>acset/js/jssor.slider-23.1.6.min.js" type="text/javascript"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>acset/js/scroll_top.js"></script>
   
    <script src="<?php echo base_url(); ?>acset/js/bootstrap.min.js"></script>
    
    <style>
      .nav-tabs>li{
    margin-left: 0px;
    margin-right: 16px;
    font-weight: bold;
}
    .fb{
        width: 60px;
         height: 60px;
          background: blue;
           font-size: 30px;
            color: #fff;
             text-align: center;
              line-height: 59px;
               margin: 4px 0px;
    }
    .youtb{
        width: 60px;
         height: 60px;
          background: #E14E42;
           font-size: 30px;
            color: #fff;
             text-align: center;
              line-height: 59px;
               margin: 4px 0px;
    }
    .zing{
        width: 60px;
         height: 60px;
          background: #00adff;
           font-size: 30px;
            color: #fff;
             text-align: center;
              line-height: 59px;
               margin: 4px 0px;
    }
    .fb:hover{
        width: 90px;
        
         transition: all 0.5s;
    }
    .zing:hover{
        width: 90px;
        
         transition: all 0.5s;
    }
    .youtb:hover{
        width: 90px;
        
         transition: all 0.5s;
    }
    .footer{
        width: 1018px;
         margin: 0px auto;
          color: #fff;
    }
    .footer a{
        color: yellow;
    }
    .footer a:hover{
        color: red;
    }
     .scrolltop{
        position: fixed; 
        right:0px; 
        bottom:360px; 
        width:60px; 
        height:60px; 
        background: black;
        color : red;
        
        border-radius:50%;
        display: none;
        
        font-family: "Arial Black", Gadget, sans-serif;
    }
    .scrolltop:hover{
       background: #fff;
    }
    .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }

        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

       
        
        .jssora12l { background-position: -16px -37px; }
        .jssora12r { background-position: -75px -37px; }
        .jssora12l:hover { background-position: -136px -37px; }
        .jssora12r:hover { background-position: -195px -37px; }
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }
        .banner1{
            width: 60%;margin: 15px auto; 
            text-align: center; 
        }
       
       input{
        border: 1px solid #03b8ff;
       }
        
    </style>
</head>
<body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59146a2d4ac4446b24a6e7bd/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
   <input class="scrolltop disabled" id="scrolltop" type="submit" name="sreach_1" value="TOP" style="z-index: 99999">
   <div class="container">
       <div class="row">
           <div class="col-md-12" style="margin: 20px 0px;">
               <div class="col-md-7">
                   <img src="<?php echo base_url(); ?>acset/img/h_logo4.png">
               </div>
               <div class="col-md-5 ">
                   <form method="post">
                       <div class="col-md-12">
                       <div class="col-md-3 col-md-offset-4">
                           <input type="submit" name="login" value="Đăng nhập" class="btn btn-danger">
                       </div>
                       <div class="col-md-4">
                             <input type="submit" name="login" value="Đăng ký" class="btn btn-success">
                       </div>
                       
                     
                       </div>
                   </form>
               </div>
           </div>
           
          <div class="col-md-12" style="margin: 20px 0px;">
               <ul class="nav nav-tabs">
                   <li>
                       <a href="<?php echo base_url(); ?>home">
                          Trang chủ
                       </a>
                   </li>
                   <li>
                       <a href="<?php echo base_url(); ?>hieu-qua">
                          Hiệu quả
                       </a>
                   </li>
                   <li onclick="active()">
                       <a href="<?php echo base_url(); ?>hoc-nhom">
                           Học theo nhóm
                       </a>
                   </li>
                   <li>
                       <a href="<?php echo base_url(); ?>huong-dan-hoc">
                           Hướng dẫn học
                       </a>
                   </li>
                   <li>
                       <a href="<?php echo base_url(); ?>bai-hoc">
                          Bài học
                       </a>
                   </li>
                   <li>
                       <a href="<?php echo base_url(); ?>FQA">
                          FAQ
                       </a>
                   </li>
                   <li>
                       <a href="<?php echo base_url(); ?>tin-tuc">
                          Tin tức
                       </a>
                   </li>
                   <li>
                       <a href="<?php echo base_url(); ?>lien-he">
                          Liên hệ
                       </a>
                   </li>
                    <li>
                       <a href="<?php echo base_url(); ?>home">
                          Thông Báo
                       </a>
                   </li>
                   <li>
                       <a href="<?php echo base_url(); ?>home">
                           
                       </a>
                   </li>
               </ul>
           </div>
            <div class="col-md-12">
               
                <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1140);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>

    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1140px;height:400px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1140px;height:400px;overflow:hidden;">
            <div>
                <img data-u="image" src="<?php echo base_url(); ?>acset/img/main_top_sub.jpg" />
            </div>
            <div>
               <img data-u="image" src="<?php echo base_url(); ?>acset/img/main_top1.jpg" />
            </div>
            
           
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
            </div>
           <section>
               <?php $this->load->view($page); ?>
           </section>
           </div>
           </div>
                  <footer class="col-md-12" style="height: 390px; background: #2F2F2F;">
                     <div style="width: 80%; margin: 20px auto;">
                         <div style="width: 10%; float: left;">
                             <img src="<?php echo base_url(); ?>acset/img/h_footer.jpg">
                         </div>
                         <div style="width: 35%; float: left; color: #fff; font-weight: bold;">
                             <h3 style="font-size: 20px;">
                                 Đăng ký
                             </h3>
                             <p>
                                ● Tại VP : số 140 Hoàng Công Chất, Phường Phú Diễn, Bắc Từ Liêm
                             </p>
                              <p>
                                ● Số điện thoại: 04-3927.1368   hoặc 04-8585.4100 
                             </p>
                             <p>
                               ● Hotline: 0916.280056 (Ms Ngọc) ; 0917.290299 (Ms Hải)
                             </p>
                              <p>
                                 ● Fanpage: www.facebook.com/lucymax.vn
                             </p>
                              <p>
                                 ● E-mail: lucymaxvietnam@gmail.com
                             </p>
                              <p>
                                 ● Trực tuyến: Fanpage Trung tâm Anh ngữ HappyKids   
                             </p>
                             <p>
                                 ● (www.facebook.com/Trung-tâm-Anh-ngữ-HappyKids-354402371416358/)
                             </p>
                             <p>
                                 ● Địa chỉ: Số 2, Hưng Gia 1, P.Tân Phong, Quận 7, TP.HCM 
                             </p>
                             <p>
                                 Copyright © Anh ngữ HappyKids JSC All Rights Reserved.
                             </p>
                         </div>
                     </div>
                     <div class="ft-2">
                             <h3 style="font-size: 20px;">
                                 THÔNG TIN KHÁC
                             </h3>
                              <p>
                                <a href="">
                                    ● CHÍNH SÁCH BẢO MẬT 
                                </a>
                             </p>
                              <p>
                                 <a href="">
                                     ● CHÍNH SÁCH HOÀN TIỀN 
                                 </a>
                             </p>
                              <p>
                                 <a href="">
                                     ● NỘI QUY 
                                 </a>
                             </p>
                              <p>
                                 <a href="">
                                     ● PHƯƠNG THỨC THANH TOÁN 
                                 </a>
                             </p>
                            
                         </div>
                         <div style="width: 18%;height: 200px; float: left; color: #fff; font-weight: bold;">
                             <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                              var js, fjs = d.getElementsByTagName(s)[0];
                              if (d.getElementById(id)) return;
                              js = d.createElement(s); js.id = id;
                              js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9";
                              fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                          
                            <div class="fb-page" data-href="https://www.facebook.com/Trung-t%C3%A2m-Anh-ng%E1%BB%AF-HappyKids-354402371416358/" data-tabs="timeline" data-width="300" data-height="240" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Trung-t%C3%A2m-Anh-ng%E1%BB%AF-HappyKids-354402371416358/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Trung-t%C3%A2m-Anh-ng%E1%BB%AF-HappyKids-354402371416358/">Trung tâm Anh ngữ HappyKids</a></blockquote></div>
                         </div>
                     </div>
                 </footer>

       </div>
      
      
                
   </div>



    <div style="
    position: fixed;
    top: 0px;
    left: 0px;
    z-index: 100;
    width: 100%;
    height: 948px;
    overflow: hidden;
    visibility: hidden;">
    <div style="position: absolute;
    top:20%;
    left: 50%;
    margin-left: -946px;
    margin-right: 0px;
    visibility: visible;cursor: pointer; ">
        <div class="fb">
            <i class="fa fa-facebook" aria-hidden="true"></i>
        </div>
        <div class="youtb">
            <i class="fa fa-youtube-play" aria-hidden="true"></i>
        </div>
        <div class="zing">
            <i class="fa fa-commenting-o" aria-hidden="true"></i>
            
        </div>
       <div class="fb-like" data-href="https://www.facebook.com/Trung-t%C3%A2m-Anh-ng%E1%BB%AF-HappyKids-354402371416358/" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
    </div>


<script type="text/javascript">
    
    $(document).ready(function(){
        $(".nav li").click(function(){
           
            $(this).addClass("active");
        });

    });

var link = window.location.href;
    $('.fb-like').attr('data-href',link);
</script>


   
</body>
</html>