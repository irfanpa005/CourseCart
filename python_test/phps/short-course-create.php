<?php include("header.php"); ?>

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Short Term Course Create</h1>
                <a href="short-course-view.php" class="btn btn-danger btn-pill">View</a>

            </div>
            <!-- PAGE-HEADER END -->



            <form method="post" class="">
                <div class="row">
                    <!-- IMAGE UPLOADER -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Image Upload</h3>
                            </div>
                            <div class=" card-body">
                                <div class="row mb-5">
                                    <div class="col-lg-12 col-sm-12 mb-4 mb-lg-0">
                                        <input type="file" class="dropify" data-bs-height="180" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- IMAGE UPLOADER end -->

                    <!-- DETAILS START -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Short Term Course Information</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <!--  Title -->
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label"> Title</label>
                                            <input type="text" class="form-control" placeholder=" Title">
                                        </div>
                                    </div>
                                    <!--  Subtitle -->
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Subtitle</label>
                                            <input type="text" class="form-control" placeholder="Subtitle">
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Description</label>
                                            <div id="summernote">

                                            </div>
                                        </div>
                                    </div>
                                  

                                    <div class="form-group">


<div class="multi-field-wrapper ">
  <div class="multi-fields">
    <div class="multi-field">
      <div class="row">
      <div class="col-lg-6" style="padding-right:0px">
          <div class="form-group">
            <label>Amount</label>
            <input type="text" name="" class="form-control form-control-lg" placeholder="Value">
          </div>
        </div>

        <div class="col-lg-6" style="padding-right:0px">
          <div class="form-group">
            <label>Amount</label>
          
            <textarea class="form-control mb-4" placeholder="Textarea"  ></textarea>
          </div>
        </div>

      </div>
      <button type="button"
        class="remove-field float-right btn btn-danger btn-sm icon-btn ml-2 "><i
          class="mdi mdi-delete"></i></button>
    </div>
  </div>
  <div>
    <button type="button" type="button"
      class=" add-field btn btn-info btn-sm icon-btn ml-2 mb-2">
      Add New<i class="mdi mdi-plus"></i>
    </button>
  </div>
</div>

</div>

                                   

                                    <!-- status -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Status</label>
                                            <select class="form-control select2" data-placeholder="Status">
                                                <option value="Enable">Enable</option>
                                                <option value="Disable">Disable</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- SUBMIT START -->
                                    <div class="col-lg-12 ">
                                        <div class="mt-5">
                                            <a href="" class="btn btn-default btn-pill">Cancel</a>
                                            <a href="" class="btn btn-warning btn-pill">Submit</a>
                                        </div>
                                    </div>
                                     <!-- SUBMIT END -->


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- DETAILS END -->


                </div>

        </div>
        </form>


    </div>
    <!-- CONTAINER END -->
</div>
</div>
<!--app-content close-->

<?php include("footer.php"); ?>
<script>
    $('.multi-field-wrapper').each(function () {
      var $wrapper = $('.multi-fields', this);
      $(".add-field", $(this)).click(function (e) {
        $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input,textarea').val('')
          .focus();
      });
      $('.multi-field .remove-field', $wrapper).click(function () {
        if ($('.multi-field', $wrapper).length > 1)
          $(this).parent('.multi-field').remove();
      });
    });
  </script>