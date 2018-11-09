<div id="news_detail">
<?php while ($row = $newDetail->fetch_assoc()) {
		$title = $row['title'];
	?>
	
	<div class="news_title">
		<?php echo $row['title'];?>
	</div>
	<div class="news_title">
		<?php echo $title;?>
	</div>
	
	
<?php }?>
</div>
