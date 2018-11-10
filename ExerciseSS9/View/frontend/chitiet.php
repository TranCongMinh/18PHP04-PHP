

    
    
    
    <!-- Page Content -->
    <div class="container">
        
        <div class="row">
           
            
            <!-- Blog Post Content Column -->
            <div class="col-lg-9">
                
                <!-- Blog Post -->
                <?php while ($row = $newDetail->fetch_assoc()){
                    $title = $row['title'];
                    $timePost = $row['created_at'];
                    $image = $row['image'];
                ?>
                <!-- Title -->
                <h1><?php echo $title; ?></h1>
                
                <!-- Author -->
                <p class="lead">
                 <a href="#"></a>
                </p>

                <!-- Preview Image -->
                <img class="img-responsive" src="<?php echo 'dist/img2/'.$image ?>">

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $timePost; ?></p>
                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo $row['content']; ?></p>

                
            
            </div>
             <?php } ?>
            <!-- Blog Sidebar Widgets Column -->
        </div>
            <!-- Comments Form -->
                <div class="well">
                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                    <form role="form" action="index.php?action=news_comment&id=<?php echo $id?>" method="POST" >
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="new_content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="new_comment">Gửi</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <?php while ($row = mysqli_fetch_array($newComment)) {
                    $cmt_username = $row['name'];
                    $cmt_created_at = $row['created'];
                    $cmt_content = $row['content'];
                 ?>
                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $cmt_username; ?>
                            <small><?php echo $cmt_created_at; ?></small>
                        </h4>
                        <?php echo $cmt_content; ?>
                    </div>
                </div>
                <?php } ?>
            </div>

            

        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->

   