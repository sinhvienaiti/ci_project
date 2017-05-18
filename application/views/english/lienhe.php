<style type="text/css">
	



</style>



<div class="col-md-12" style="margin: 50px 0px;">
	

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.737997163313!2d105.76249751539393!3d21.043166892661173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454c6affb7c07%3A0x7f845cea4008b182!2zMTQwIEhvw6BuZyBDw7RuZyBDaOG6pXQsIE1haSBE4buLY2gsIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1494603985258"  frameborder="0" style="width: 100%;
	height: 600px;
	border:0; 
    visibility: visible;" allowfullscreen></iframe>
</div>
<div class="col-md-12" style="background-color: #f3f3f3;
    border: 2px solid #ededed; height: 900px; margin: 50px 0px;">
	<div style="width: 80%; margin: 40px auto;">
		<img style="width: 100%;" src="<?php echo base_url(); ?>acset/img/paymentway.jpg">
	</div>
	<div style="width: 80%; margin: 30px auto; text-align: center;">
		<h2>
			1. Thu tiền tại nhà (COD)
		</h2>
		<p>
			Nhân viên bưu điện sẽ tới tận nhà để thu tiền và giao phiếu chứa tài khoản học cho học viên.
		</p>
		<p>
			Khách hàng đăng ký gói 1 năm sẽ được miễn phí ship
		</p>
		<h2>
			2. Chuyển khoản
		</h2>
		<p>
			Xin vui lòng chuyển khoản một trong các tài khoản ngân hàng sau:
		</p>
		<h2>
			Ngân hàng HD Bank chi nhánh Sài Gòn (Phòng giao dịch Phú Mỹ Hưng).
		</h2>
		<p>
			Số TK: 030704070004342.
		</p>
		<p>
			Chủ TK: Công ty cổ phần HappyKids.
		</p>
		<h2>
			Ngân hàng Vietcombank Nam Sài Gòn.
		</h2>
		<p>
			Số TK: 0181003516456.
		</p>
		<p>
			Chủ TK: Công ty cổ phần HappyKids.
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