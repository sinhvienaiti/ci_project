
	<style type="text/css">
	a:hover{
		text-decoration: none;
	}
	.tab-content>a{
		color: black;
		font-size: 14px;
    letter-spacing: 2px;
	}
</style>
<div class="col-md-12">
	<h1 style="font-weight: bold;">
		Bảng Tin
	</h1>
	<hr style="border-bottom: 3px solid gray;">

</div>
<div class="col-md-12">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Tin Tức</a></li>
    
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
      
      <?php
     
       foreach($all as $key => $value){

      	 ?>
		  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default" style="margin-bottom: 10px;">
		    <div style="height: 60px;" class="panel-heading" role="tab" id="headingTwo1<?php echo $value['id']; ?>">
		      <h4 class="panel-title"       >
		        <a style="" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo<?php echo $value['id']; ?>" aria-expanded="false" aria-controls="collapseTwo<?php echo $value['id']; ?>">
		         <i class="fa fa-share-square-o" aria-hidden="true"></i>
		          
		          <span style="width: 98%;float: left; padding: 10px 0px;">
		         	<?php echo $value['question']; ?>
		         </span>
		        </a>
		      </h4>
		    </div>
		    <div id="collapseTwo<?php echo $value['id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo1<?php echo $value['id']; ?>">
		      <div class="panel-body" style=" margin-left:220px;">
		         <?php echo $value['answer']; ?>
		         <?php if($value['img'] != NULL){
		         	?>
		         	<img src="<?php echo base_url(); ?>acset/img/<?php echo $value['img']; ?>">
		         	<?php

		         	} ?>
		      </div>
		    </div>
		  </div>
		</div>
		<?php

		 } ?>
    </div>
    
    
  </div>
</div>
