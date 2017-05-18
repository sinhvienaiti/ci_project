<style type="text/css">
	a:hover{
		text-decoration: none;
	}
	a{
		color: black;
		font-size: 14px;
    letter-spacing: 2px;
	}
</style>
<div class="col-md-12">
	<h1 style="font-weight: bold;">
		FQA
	</h1>
	<hr style="border-bottom: 3px solid gray;">

</div>
<div class="col-md-12">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Về thành viên</a></li>
    <li><a data-toggle="tab" href="#menu2">Về thanh toán</a></li>
    <li><a data-toggle="tab" href="#menu3">Về website</a></li>
    <li><a data-toggle="tab" href="#menu4">Khác</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <?php
     
       foreach($all as $key => $value){

      	 ?>
		  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default" style="margin-bottom: 10px;">
		    <div style="height: 60px;" class="panel-heading" role="tab" id="headingTwo1<?php echo $value['id']; ?>">
		      <h4 class="panel-title"       >
		        <a style="" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo<?php echo $value['id']; ?>" aria-expanded="false" aria-controls="collapseTwo<?php echo $value['id']; ?>">
		         <i class="fa fa-share-square-o" aria-hidden="true"></i>
		          <span style="width: 20%;float: left; padding: 10px 0px;">
		         	<?php echo $value['about']; ?>
		         </span>
		          <span style="width: 78%;float: left; padding: 10px 0px;">
		         	<?php echo $value['question']; ?>
		         </span>
		        </a>
		      </h4>
		    </div>
		    <div id="collapseTwo<?php echo $value['id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo1<?php echo $value['id']; ?>">
		      <div class="panel-body" style=" margin-left:220px;">
		         <?php echo $value['answer']; ?>
		      </div>
		    </div>
		  </div>
		</div>
		<?php

		 } ?>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <?php
     
       foreach($user as $key => $value){

      	 ?>
		  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default" style="margin-bottom: 10px;">
		    <div style="height: 60px;" class="panel-heading" role="tab" id="headingTwo11<?php echo $value['id']; ?>">
		      <h4 class="panel-title"     >
		        <a style="" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo1<?php echo $value['id']; ?>" aria-expanded="false" aria-controls="collapseTwo1<?php echo $value['id']; ?>">
		         <i class="fa fa-share-square-o" aria-hidden="true"></i>
		           <span style="width: 20%;float: left; padding: 10px 0px;">
		         	<?php echo $value['about']; ?>
		         </span>
		          <span style="width: 78%;float: left; padding: 10px 0px;">
		         	<?php echo $value['question']; ?>
		         </span>
		        </a>
		      </h4>
		    </div>
		    <div id="collapseTwo1<?php echo $value['id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo11<?php echo $value['id']; ?>">
		      <div class="panel-body" style=" margin-left:220px;">
		         <?php echo $value['answer']; ?>
		      </div>
		    </div>
		  </div>
		</div>
		<?php

		 } ?>
      
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      <?php
     
       foreach($pay as $key => $value){

      	 ?>
		  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default" style="margin-bottom: 10px;">
		    <div style="height: 60px;" class="panel-heading" role="tab" id="headingTwo13<?php echo $value['id']; ?>">
		      <h4 class="panel-title"    >
		        <a style="" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo3<?php echo $value['id']; ?>" aria-expanded="false" aria-controls="collapseTwo3<?php echo $value['id']; ?>">
		         <i class="fa fa-share-square-o" aria-hidden="true"></i>
		          <span style="width: 20%;float: left; padding: 10px 0px;">
		         	<?php echo $value['about']; ?>
		         </span>
		          <span style="width: 78%;float: left; padding: 10px 0px;">
		         	<?php echo $value['question']; ?>
		         </span>
		        </a>
		      </h4>
		    </div>
		    <div id="collapseTwo3<?php echo $value['id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo13<?php echo $value['id']; ?>">
		      <div class="panel-body" style=" margin-left:220px;">
		         <?php echo $value['answer']; ?>
		      </div>
		    </div>
		  </div>
		</div>
		<?php

		 } ?>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      <?php
     
       foreach($web as $key => $value){

      	 ?>
		  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default" style="margin-bottom: 10px;">
		    <div style="height: 60px;" class="panel-heading" role="tab" id="headingTwo14<?php echo $value['id']; ?>">
		      <h4 class="panel-title"  >
		        <a style="" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo4<?php echo $value['id']; ?>" aria-expanded="false" aria-controls="collapseTwo4<?php echo $value['id']; ?>">
		         <i class="fa fa-share-square-o" aria-hidden="true"></i>
		           <span style="width: 20%;float: left; padding: 10px 0px;">
		         	<?php echo $value['about']; ?>
		         </span>
		          <span style="width: 78%;float: left; padding: 10px 0px;">
		         	<?php echo $value['question']; ?>
		         </span>
		        </a>
		      </h4>
		    </div>
		    <div id="collapseTwo4<?php echo $value['id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo14<?php echo $value['id']; ?>">
		      <div class="panel-body" style=" margin-left:220px;">
		         <?php echo $value['answer']; ?>
		      </div>
		    </div>
		  </div>
		</div>
		<?php

		 } ?>
    </div>
    <div id="menu4" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      <?php
     
       foreach($other as $key => $value){

      	 ?>
		  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default" style="margin-bottom: 10px;">
		    <div style="height: 60px;" class="panel-heading" role="tab" id="headingTwo15<?php echo $value['id']; ?>">
		      <h4 class="panel-title"  >
		        <a style="" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo5<?php echo $value['id']; ?>" aria-expanded="false" aria-controls="collapseTwo5<?php echo $value['id']; ?>">
		         <i class="fa fa-share-square-o" aria-hidden="true"></i>
		           <span style="width: 20%;float: left; padding: 10px 0px;">
		         	<?php echo $value['about']; ?>
		         </span>
		          <span style="width: 78%;float: left; padding: 10px 0px;">
		         	<?php echo $value['question']; ?>
		         </span>
		        </a>
		      </h4>
		    </div>
		    <div id="collapseTwo5<?php echo $value['id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo15<?php echo $value['id']; ?>">
		      <div class="panel-body" style=" margin-left:220px;">
		         <?php echo $value['answer']; ?>
		      </div>
		    </div>
		  </div>
		</div>
		<?php

		 } ?>
    </div>
  </div>
</div>
