

<div class="container">
	
<div class="col-md-9">
				<?php 
				if (isset($_GET['page'])) {
					$pageNow = $_GET['page'];
				}else $pageNow = 1;
				
				echo "Trang "."$pageNow";
				 ?>
	            <div class="panel panel-default">
	            	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;"> Tin Tức</h2>
	            	</div>
	            	<div class="panel-body">
	            		<!-- item -->
	            		<?php while ($row = mysqli_fetch_array($phantrang)) {
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
			                        <p><?php echo $row['summary']; ?></p>
			                        <a class="btn btn-primary" href="index.php?action=detail&id=<?php echo $id ?>">Xem chi tiết <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>

		                	</div>

							<div class="break"></div>
		                </div>
		                <!-- end item -->
		                <!-- item -->
					    <?php } ?>
					     <!-- Pagination -->
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <ul class="pagination">
                                <li>
                                    <a href="#">&laquo;</a>
                                </li>
                                <?php for($i=1; $i <= $tongsotrang; $i++) { 
                                	
                                 ?>
                                <li class="active">
                                    <a href="index.php?action=phantrang&page=<?php echo $i;?>"><?php echo $i; ?></a>
                                </li>
                                <?php } ?>
                                <li>
                                    <a href="#">&raquo;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
		                <!-- end item -->

					</div>  
	            </div>
        	</div>

</div>