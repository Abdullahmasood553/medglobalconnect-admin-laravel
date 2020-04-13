

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
                                  <h3 class="box-title">Main Category</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form">
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label for="title">Main Category Name</label>
                                      <input type="text" class="form-control" id="name" placeholder="Enter Name">
                                    </div>

                                    <div class="form-group">
                                      <label for="title">Choose Main Category</label>
                                      <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                      </select>
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
