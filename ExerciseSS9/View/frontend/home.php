
<div class="container">
	
<div class="col-md-9">
	            <div class="panel panel-default">
	            	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;"> Tin Tức</h2>
	            	</div>
					
	            	<div class="panel-body">
	            		<!-- item -->
	            		<?php while ($row = mysqli_fetch_array($listAll)) {
     							$id = $row['id'];
							?>
					    <div class="row-item row">
		                	<h3>
		                		<a href="#"><?php echo $row['name_NC']; ?></a> |
		                	
		                	</h3>
		                	<div class="col-md-12 border-right">
		                		<div class="col-md-3">
			                        <a href="chitiet.html">
			                            <img class="img-responsive" src="<?php echo 'dist/img2/'.$row['image'] ?>" alt="">
			                        </a>
			                    </div>

			                    <div class="col-md-9">
			                        <h3><?php echo $row['title']; ?></h3>
			                        <p><?php echo $row['content']; ?></p>
			                        <a class="btn btn-primary" href="index.php?action=detail&id=<?php echo $id ?>">Xem chi tiết <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>

		                	</div>

							<div class="break"></div>
		                </div>
		                <!-- end item -->
		                <!-- item -->
					    <?php } ?>
		                <!-- end item -->

					</div>
	            </div>
        	</div>

</div>