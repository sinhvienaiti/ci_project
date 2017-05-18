<style type="text/css">
	.banner1 p{
            font-weight: bold;
            font-size: 17px;
            line-height: 40px;
        }
        .banner2 p{
            font-size: 20px;
            color: rgb(62, 179, 40);
            font-weight: bold;
            margin-bottom: 40px;
        }
        
        .level{
            margin-top: 50px;
        }
        .level ul li{
            display: inline-block;
            margin: 0px 30px 10px 0px;
        }
        .ft-2{
            width: 20%;  float: left; color: #fff; font-weight: bold;
        }
        .ft-2 p a{
            color: #fff;
        }
        .cart-wrap {
         
          height: 400px;
       
          overflow: hidden;
        }
        .cart {
          position: relative;
          transform-style: preserve-3d;
          -webkit-transform-style: preserve-3d;
          height: 100%;
          transition: transform .5s;
        }
        .cart-front,
        .cart-back {
          position: absolute;
          top: 0;
          left: 0;
          overflow: hidden;
          backface-visibility: hidden;
          width: 80%;
          height:80%;
         
          text-align: center;
        }
        .cart-front {
         
          color: white;
          z-index: 2;
        }
        .cart-back {
            border-radius: 15px;
         background-color: #00bcd4;
          z-index: 3;
          transform: rotateY(180deg);
        }
        .cart-wrap:hover .cart {
          transform: rotateY(180deg);
        }
</style>
<div class="col-md-12" style="height: 634px; margin:10px 0px; margin-top: 50px; background: url('<?php echo base_url(); ?>acset/img/back1.jpg') no-repeat center center;">
               <div class="banner1">
                   <h1 style="color: rgb(62, 179, 40); font-weight: bold;font-size: 38px;">
                       HỌC VIÊN SỬ DỤNG HAPPYKIDS
                   </h1>
                    <p>
                      Tương thích trên mọi thiết bị: máy tính, laptop, tablet, điện thoại
                   </p>
                    <p>
                      Học mọi lúc mọi nơi, cả nhà cùng học
                   </p>
                    <p>
                      Thiết kế cho độ tuổi từ 4 đến 15
                   </p>
               </div>

               <div class="col-md-12" style="text-align: center;">

                   
                       <iframe style="width: 30%; " src="https://www.youtube.com/embed/s4tXAaVeKO8" frameborder="2" allowfullscreen=""></iframe>
                   
                   
                       <iframe style="width: 30%;" src="https://www.youtube.com/embed/w0u00CPY4sA" frameborder="2" allowfullscreen=""></iframe>
                   
                  
                       <iframe style="width: 30%;" src="https://www.youtube.com/embed/D7Ge7p6CK-c" frameborder="2" allowfullscreen=""></iframe>
                   
                  
               </div>
               <div class="col-md-12" style="text-align: center; margin-top: 25px;">
               
                   
                       <iframe style="width: 30%;" src="https://www.youtube.com/embed/XduHaKn0YlA" frameborder="2" allowfullscreen=""></iframe>
                   
                   
                       <iframe style="width: 30%;" src="https://www.youtube.com/embed/rjgTNLaxCFs" frameborder="2" allowfullscreen=""></iframe>
                   
                  
                       <iframe style="width: 30%;" src="https://www.youtube.com/embed/vjGM87OOioI" frameborder="2" allowfullscreen=""></iframe>
                   
                  
               </div>
           </div>
            <div class="col-md-12" style="background: #e4f8ff;">
            <div style=" height: 252px; margin: 50px 0px; background: url('<?php echo base_url(); ?>acset/img/back2.jpg') no-repeat center center;">
               <div class="banner1" style="">
                   <h1 style="font-size: 30px;line-height: 70px;font-weight: bold; color: blue;">
                       HÃY CHỌN CẤP ĐỘ PHÙ HỢP CHO BẠN
                   </h1>
                   <p>
                       Bạn sẽ được xem 28 bài học miễn phí. Chỉ riêng bài 1 mới có phụ đề
                   </p>
                    <p>
                       Gợi ý: Nếu mới bắt đầu hãy xem qua Level 1 để luyện phát âm.
                   </p>
                    <p>
                       Nếu muốn nâng cao kĩ năng nghe hãy nhấp vào "Kĩ năng nghe"
                   </p>
               </div>
            </div>
           </div>
           
            <div class="col-md-12" style="margin: 0px auto; margin-top: 40px;background: url('<?php echo base_url(); ?>acset/img/back3.jpg') center center">
                <div class="cart-wrap col-md-4">
                  <div class="cart">
                    <div class="cart-front">
                      <img src="<?php echo base_url(); ?>acset/img/level_1_1.jpg">
                    </div>
                    <div class="cart-back">
                      <h1>cart back</h1>
                      <div style="margin-top: 120px;">
                      <a href="" class="btn-lg btn-warning">
                          Tham khảo
                      </a>
                      </div>
                      </div>
                    </div>
            </div>
             <div class="cart-wrap col-md-4">
                  <div class="cart">
                    <div class="cart-front">
                    <a href="">
                        <img src="<?php echo base_url(); ?>acset/img/level_2_1.jpg">
                    </a>
                    </div>
                    <div class="cart-back">
                      <h1>cart back</h1>
                      <div style="margin-top: 120px;">
                      <a href="" class="btn-lg btn-warning">
                          Tham khảo
                      </a>
                      </div>
                      </div>
                    </div>
            </div>
             <div class="cart-wrap col-md-4">
                  <div class="cart">
                    <div class="cart-front">
                    <a href="">
                         <img src="<?php echo base_url(); ?>acset/img/level_3_1.jpg">
                    </a>
                     
                    </div>
                    <div class="cart-back">
                      <h1>cart back</h1>
                      <div style="margin-top: 120px;">
                      <a href="" class="btn-lg btn-warning">
                          Tham khảo
                      </a>
                      </div>
                      </div>
                    </div>
            </div>
            <div class="cart-wrap col-md-4">
                  <div class="cart">
                    <div class="cart-front">
                    <a href="">
                        <img src="<?php echo base_url(); ?>acset/img/level_4_1.jpg">
                    </a>
                      
                    </div>
                    <div class="cart-back">
                      <h1>cart back</h1>
                      <div style="margin-top: 120px;">
                      <a href="" class="btn-lg btn-warning">
                          Tham khảo
                      </a>
                      </div>
                      </div>
                    </div>
            </div>
             <div class="cart-wrap col-md-4">
                  <div class="cart">
                    <div class="cart-front">
                    <a href="">
                         <img src="<?php echo base_url(); ?>acset/img/level_5_1.jpg">
                    </a>
                     
                    </div>
                    <div class="cart-back">
                      <h1>cart back</h1>
                      <div style="margin-top: 120px;">
                      <a href="" class="btn-lg btn-warning">
                          Tham khảo
                      </a>
                      </div>
                      </div>
                    </div>
            </div>
             <div class="cart-wrap col-md-4">
                  <div class="cart">
                    <div class="cart-front">
                      <a href="">
                          <img src="<?php echo base_url(); ?>acset/img/level_6_1.jpg">
                      </a>
                    </div>
                    <div class="cart-back">
                      <h1>cart back</h1>
                      <div style="margin-top: 120px;">
                      <a href="" class="btn-lg btn-warning">
                          Tham khảo
                      </a>
                      </div>
                      </div>
                    </div>
            </div>
            </div>
           

             
            </div>
            <div class="col-md-12" style="background: #00c1af; border-radius: 15px; margin-top: 10px;">
                 <div style="height:260px;margin: 20px 0px; background: url('<?php echo base_url(); ?>acset/img/intro_03.jpg') no-repeat center center;"" >
                
            </div>
            </div>
            <div class="col-md-12" style="height: 200px; margin: 0px auto; margin-top: 40px;background: url('<?php echo base_url(); ?>acset/img/back3.jpg') center center">
                    <div  style="width: 80%; margin: 0px auto; text-align: center;">
                   <h1 style="font-size: 30px;line-height: 70px;font-weight: bold; color: blue;">
                       PHÂN BỔ CẤP ĐỘ VÀ THỜI GIAN HOÀN THÀNH
                   </h1>
                   <p style="font-weight: bold;">
                      Dự kiến hoàn thành trong 1 năm rưỡi, trung bình mỗi ngày 20 - 25 phút học.
                   </p>
                    <p style="font-weight: bold;">
                      Tốc độ hoàn thành trung bình thực tế tại Việt Nam là 1 năm, trung bình mỗi ngày 25 - 30 phút học.
                   </p>
                   
               </div>
            </div>
            <div class="col-md-12" style="margin-top: 20px;">
                <img src="<?php echo base_url(); ?>acset/img/img_chart.jpg" alt="" style="width:100%;">
            </div>
            <div class="col-md-12" style="text-align: center;">
                <h1>
                    Gợi ý: Bạn có thể kết hợp học 2 chủ đề cùng lúc
                </h1>
            </div>
            <div class="col-md-12" style="height: 200px; margin: 0px auto; margin-top: 40px;background: url('<?php echo base_url(); ?>acset/img/back5.jpg') no-repeat center center">
                    <div  style="width: 80%; margin: 0px auto; text-align: center;">
                   <h1 style="font-size: 30px;line-height: 70px;font-weight: bold; color: blue;">
                       GHI DANH HỌC TIẾNG ANH HAPPYKIDS
                   </h1>
                   <p style="font-weight: bold;">
                   Sau khi gửi thông tin nhân viên tư vấn sẽ gọi lại cho bạn
                   </p>
                    <p style="font-weight: bold;">
                     Mọi thông tin chi tiết về khóa học sẽ được tư vấn kỹ hơn qua cuộc gọi này.
                   </p>
                   
               </div>
            </div>
            <div class="col-md-12">
                 <form method="post" action="">
                <div class="form-group col-md-12 " >
                    <label class="control-label col-md-3">Họ Tên</label>
                    <div id="has_1" class="col-md-9 has-success has-feedback" style="padding: 0px;">
                    <div class="col-md-11">
                        <label ></label>
                        <input onkeyup="hoten()" class="form-control" style="height: 50px;" type="text" name="name"  id="name" placeholder="Điền Họ Tên" >
                    </div>
                        <div  class="col-md-1">
                        <span id="name_1" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        
                        </div>
                    </div>

                </div>
                
                <div class="form-group col-md-12 " >
                    <label class="control-label col-md-3">E-mail</label>
                    <div id="has_2" class="col-md-9 has-success has-feedback" style="padding: 0px;">
                    <div class="col-md-11">
                        <label ></label>
                        <input onkeyup="email()" class="form-control" style="height: 50px;" type="email" name="email" id="email" placeholder="Điền Email">
                    </div>
                        <div class="col-md-1">
                        <span id="email_1" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        
                        </div>
                    </div>

                </div>
                
                <div class="form-group col-md-12 " >
                    <label class="control-label col-md-3">Địa chỉ</label>
                    <div id="has_3" class="col-md-9 has-success has-feedback" style="padding: 0px;">
                    <div class="col-md-11">
                        <label for="inputSuccess2"></label>
                        <input onkeyup="diachi()" class="form-control" style="height: 50px;" type="text" name="diachi" id="diachi" placeholder="Điền địa chỉ">
                    </div>
                        <div class="col-md-1">
                        <span id="diachi_1" class="glyphicon  form-control-feedback" aria-hidden="true"></span>
                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                        </div>
                    </div>

                </div>
                
                <div class="form-group col-md-12 " >
                    <label class="control-label col-md-3">Số điện thoại</label>
                    <div id="has_4" class="col-md-9 has-success has-feedback" style="padding: 0px;">
                    <div class="col-md-11">
                        <label for="inputSuccess2"></label>
                        <input onkeyup="title()" class="form-control" style="height: 50px;" type="text" name="title" id="title" placeholder="Số điện thoại">
                    </div>
                        <div class="col-md-1">
                        <span id="title_1" class="glyphicon  form-control-feedback" aria-hidden="true"></span>
                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                        </div>
                    </div>

                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-md-3">Thông tin bé và ghi chú</label>
                    <div id="has_5" class="col-md-9 has-success has-feedback">
                    <div class="col-md-11">
                        <label for="inputSuccess2"></label>
                        <textarea onkeyup="nd()" class="form-control"  type="text" name="question" rows="8" id="nd" placeholder=""></textarea>
                    </div>
                    <div class="col-md-1">
                        <span id="nd_1" class="glyphicon  form-control-feedback" aria-hidden="true"></span>
                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                        </div>
                    </div>
                </div>
               
                
                <div class="col-md-12 form-group">
                    <div style="width: 30%; margin: 30px auto; text-align: center;">
                        <input style="width: 200px;" type="submit" name="send" class="btn-lg btn-info" value="Ghi danh" id="send" disabled="" >                   
                      </div>  
                    
                </div>
                
             
                
                </form>
               
                 </div>
                  <div class="col-md-12" style="margin-bottom: 50px;">
                <div style="position: relative;">
                    <img src="<?php echo base_url(); ?>acset/img/back6.jpg" style="width: 1140px; height: 600px;">
                </div>
                <div class="col-md-12 banner2" style="position: absolute; top:50px; left: 50px;">
                <div class="col-md-4 " >
                    <p>
                        GIỚI THIỆU VỀ HAPPYKIDS
                    </p>
                    <iframe  " src="https://www.youtube.com/embed/s4tXAaVeKO8" frameborder="2" allowfullscreen=""></iframe>
                </div>
                <div class="col-md-4">
                    <p>
                        BÁO CHÍ NÓI VỀ HAPPYKIDS
                    </p>
                    <img src="<?php echo base_url(); ?>acset/img/Vietnamnet_Logo.png" style="width: 100%;">
                </div>
                <div class="col-md-4">
                    <p>
                        CHẤT LƯỢNG
                    </p>
                    <img src="<?php echo base_url(); ?>acset/img/Webtretho_Logo.png" style="width: 100%;">
                    
                </div>
                <div class="col-md-6 col-md-offset-3" style="margin-top: 50px;">
                     <img src="<?php echo base_url(); ?>acset/img/Logo_Dan_tri.png" style="width: 100%;">

                </div>
                </div>
                </div>
                 </div>
                 <script type="text/javascript">

        function hoten(){
            var name = $('#name').val();
            if(name == ''){
                 $('#name_1').removeClass("glyphicon-ok").addClass("glyphicon-remove");
                 $('#has_1').removeClass("has-success").addClass("has-error");
                 $('#send').attr('disabled','disabled');

            }else{
                 $('#name_1').removeClass("glyphicon-remove").addClass("glyphicon-ok");
                 $('#has_1').removeClass("has-error").addClass("has-success");
                    var nd1 = document.getElementById("nd").value;
                    var title1 = document.getElementById("title").value;
                    var diachi1 = document.getElementById("diachi").value;
                    var email1 = document.getElementById("email").value;
                    var name = document.getElementById("name").value;
                    if(name && email1 && title1 && diachi1 && nd1 != ''){
                        $('#send').removeAttr('disabled','disabled');
        }
                 
            }
        }
        
        

        var email = document.getElementById("email");
        email.addEventListener('keyup', function(){
            var email1 = document.getElementById("email").value;
        if(email1 == ''){
                 $('#email_1').removeClass("glyphicon-ok").addClass("glyphicon-remove");
                 $('#has_2').removeClass("has-success").addClass("has-error");
                 $('#send').attr('disabled','disabled');
                 
            }else{
                 $('#email_1').removeClass("glyphicon-remove").addClass("glyphicon-ok");
                 $('#has_2').removeClass("has-error").addClass("has-success");
                 var nd1 = document.getElementById("nd").value;
                    var title1 = document.getElementById("title").value;
                    var diachi1 = document.getElementById("diachi").value;
                    var email1 = document.getElementById("email").value;
                    var name = document.getElementById("name").value;
                    if(name && email1 && title1 && diachi1 && nd1 != ''){
                        $('#send').removeAttr('disabled','disabled');
        }
                 
            }
    });
        var diachi = document.getElementById("diachi");
        diachi.addEventListener('keyup', function(){
            var diachi1 = document.getElementById("diachi").value;
        if(diachi1 == ''){
                 $('#diachi_1').removeClass("glyphicon-ok").addClass("glyphicon-remove");
                 $('#has_3').removeClass("has-success").addClass("has-error");
                 $('#send').attr('disabled','disabled');
                 
            }else{
                 $('#diachi_1').removeClass("glyphicon-remove").addClass("glyphicon-ok");
                 $('#has_3').removeClass("has-error").addClass("has-success");
                 var nd1 = document.getElementById("nd").value;
                    var title1 = document.getElementById("title").value;
                    var diachi1 = document.getElementById("diachi").value;
                    var email1 = document.getElementById("email").value;
                    var name = document.getElementById("name").value;
                    if(name && email1 && title1 && diachi1 && nd1 != ''){
                        $('#send').removeAttr('disabled','disabled');
        }
                 
            }
    });
        var title = document.getElementById("title");
        title.addEventListener('keyup', function(){
            var title1 = document.getElementById("title").value;
        if(title1 == ''){
                 $('#title_1').removeClass("glyphicon-ok").addClass("glyphicon-remove");
                 $('#has_4').removeClass("has-success").addClass("has-error");
                  $('#send').attr('disabled','disabled');
                 
            }else{
                 $('#title_1').removeClass("glyphicon-remove").addClass("glyphicon-ok");
                 $('#has_4').removeClass("has-error").addClass("has-success");
                 var nd1 = document.getElementById("nd").value;
                    var title1 = document.getElementById("title").value;
                    var diachi1 = document.getElementById("diachi").value;
                    var email1 = document.getElementById("email").value;
                    var name = document.getElementById("name").value;
                    if(name && email1 && title1 && diachi1 && nd1 != ''){
                        $('#send').removeAttr('disabled','disabled');
        }
                  
            }
    });
        var nd = document.getElementById("nd");
        nd.addEventListener('keyup', function(){
            var nd1 = document.getElementById("nd").value;
        if(nd1 == ''){
                 $('#nd_1').removeClass("glyphicon-ok").addClass("glyphicon-remove");
                 $('#has_5').removeClass("has-success").addClass("has-error");
                  $('#send').attr('disabled','disabled');
                 
            }else{
                 $('#nd_1').removeClass("glyphicon-remove").addClass("glyphicon-ok");
                 $('#has_5').removeClass("has-error").addClass("has-success");
                    var nd1 = document.getElementById("nd").value;
                    var title1 = document.getElementById("title").value;
                    var diachi1 = document.getElementById("diachi").value;
                    var email1 = document.getElementById("email").value;
                    var name = document.getElementById("name").value;
                    if(name && email1 && title1 && diachi1 && nd1 != ''){
                        $('#send').removeAttr('disabled','disabled');
        }
                
            }
    });

    </script>
