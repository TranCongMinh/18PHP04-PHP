<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add news</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="admin.php?action=add_news" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" name="title" placeholder="Enter Title">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Summary</label>
                  <input type="text" class="form-control" name="summary" placeholder="Enter Summary">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Connten</label>
                  <input type="text" class="form-control" name="content" placeholder="Enter Content">
                </div>
                <label>Categories</label>
                <select class="form-control" name="category">
                    <?php echo $category;?>
                  </select>

                <div class="form-group">
                  <label for="exampleInputFile" >File input</label>
                  <input type="file" id="exampleInputFile" name="image">

                  
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_news">ADD PRODUCT</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>