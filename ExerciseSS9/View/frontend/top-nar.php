                            
<?php ob_start();?>                   

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
         
                
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
           
             
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Tin Tức</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="gioithieu.html">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="lienhe.html">Liên hệ</a>
                    </li>
                </ul>

                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="dangnhap.php">Đăng Nhập</a>
                    </li>
                    <li>
                        <a href="dangki.php">Đăng Ký</a>
                    </li>
                    <li>
                        <a>
                            <span class="glyphicon glyphicon-user"></span>

                            <?php
                            
                            if (isset($_SESSION['userlogin'])) {
                               echo $_SESSION['userlogin'];
                            }else
                             echo "Đăng nhập để bình luận";?>
                        </a>
                    </li>

                    <li>
                        <a href="index.php?action=userlogout">Đăng xuất</a>
                    </li>

                </ul>
            </div>



            <!-- /.navbar-collapse -->
        </div>
    
        <!-- /.container -->
    </nav>