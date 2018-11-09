<?php
    session_start();
   
    include 'common/frontend/fooder.php'
?>


<body>

   
        <?php 
            include 'Controller/frontend_controller.php';
            $controller = new FrontendController();
            $controller->handleRequest();
        ?>
            
        
        <!-- /.row -->
    
    <!-- end Page Content -->

    <!-- Footer -->
    <hr>
    <footer>
        <div class="row">
            <div class="col-md-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>

</body>

</html>
