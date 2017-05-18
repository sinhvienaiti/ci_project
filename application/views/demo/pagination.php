<style type="text/css">
	.pagination{
		width: 30%; 
		margin: 100px auto;
		padding: 15px;
		border: 1px solid blue;
	}
	.pagination a{
		padding: 10px; margin: 10px;
		color: red;
	}
	ul li{
		padding: 10px;
		margin: 10px;
	}
</style>


	
<?php echo $pagination; ?>

<ul>
<?php
	foreach($data as $key => $value){
		?>
	<li>
		<a href="">
		<?php echo $value['title']; ?>
		</a>
	</li>
	<?php


		
	}
?>
</ul>

	
