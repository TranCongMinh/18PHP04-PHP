

    
    
    
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
        <!-- /.row -->
    </div>
    <!-- end Page Content -->

   