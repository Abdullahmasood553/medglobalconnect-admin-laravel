

                @section('content')  
                @extends('backend.admin.layouts.master')
                    <!-- Content Wrapper. Contains page content -->
                    <div class="content-wrapper">

              
                      <!-- Main content -->
                      <section class="content">
                        <div class="row">
                          <!-- left column -->
                          <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                              <div class="box-header with-border">
                                <h3 class="box-title">Add Sub Category</h3>
                              </div><!-- /.box-header -->
                              <!-- form start -->
                              <form role="form">
                                <div class="box-body">
                                  <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Main Category Name">
                                  </div>
                                </div><!-- /.box-body -->
              
                                <div class="box-footer">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                              </form>
                            </div><!-- /.box -->
                          </div><!--/.col (left) -->

                        </div>   <!-- /.row -->
                      </section><!-- /.content -->
                    </div><!-- /.content-wrapper -->
  @endsection