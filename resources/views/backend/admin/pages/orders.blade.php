

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
                                  <h3 class="box-title">Add Orders</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form>
                                  @csrf
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label for="title">Title</label>
                                      <input type="text" class="form-control" id="title" placeholder="Enter title">
                                    </div>

                                    <div class="form-group">
                                      <label for="title">Choose Category</label>
                                      <select class="form-control" name="cat_name">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                      </select>
                                    </div>


                                    <div class="form-group">
                                      <label for="description">Enter Descrition</label>
                                      <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter ..."></textarea>
                                    </div>

                                    <div class="form-group">
                                      <label for="image">File input</label>
                                      <input type="file" name="image" id="image">
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



  @push('scripts')
<script>
  $(document).ready(function () {
      $('.save_btn').on('click', function (e) {
          var title            = $('#title').val();
          var cat_name         = $('#cat_name').val();
          var description      = $('#description').val();
          var image            = $('#image').val();


          var form = $(this).parents('form');
          console.log(form);
          $(form).validate({
              rules: {
                title: {
                      required: true,
                  },
                  cat_name: {
                      required: true,
                  },
                  description: {
                      required: true,
                  },
              },
              messages: {
                  title: "Title is required.",
                  description: "Description is required.",
              },
       
              submitHandler: function () {
      
                  var formData = new FormData(form[0]);
                  $.ajax({
                      type: 'POST',
                      url: 'save_order',
                      data: formData,
                      processData: false,
                      contentType: false,
                      success: function (data) {
                      
                          console.log(data);
                          if (data.status) {
                            $('#notifDiv').fadeIn();
                            $('#notifDiv').css('background', 'green');
                            $('#notifDiv').text('Business listing created successfully');
                            setTimeout(() => {
                                $('#notifDiv').fadeOut();
                            }, 3000);
                                $('[name="title"]').val('');
                                $('[name="description"]').val('');
                          } else {
                            $('#notifDiv').fadeIn();
                            $('#notifDiv').css('background', 'red');
                            $('#notifDiv').text('An error occured. Please try later');
                            setTimeout(() => {
                                $('#notifDiv').fadeOut();
                            }, 3000);
                          }
                      },
                      error: function (err) {
                        console.log(err);
                      }
                  });
              }
          });
      });
  });
</script>
@endpush