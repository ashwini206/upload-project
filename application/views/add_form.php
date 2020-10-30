<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Add Form
                        </h1>
                    </div>
                </div>
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST" action="<?php echo base_url();?>Upload/insert" enctype="multipart/form-data">
      
                                      <div class="form-group">
                                            <label>User Name</label>
                                            <input class="form-control"type="text" name="user_name" placeholder="Enter User Name" required="">
                                        </div>

                                             <div class="form-group">
                                            <label>Mobile No</label>
                                            <input class="form-control"type="number" name="mobile_no" pattern="[1-9]{1}[0-9]{9}" title="Enter 10 digit mobile number"placeholder="Enter Mobile No " required="">
                                        </div>

                                         
                                            <div class="form-group">
<h5 style="color:black;">Type</h5>
<select required="required" class="form-control" name="type">
<option value="">Select Upload Type</option>
<option value="Image">Image</option>
<option value="Video">Video</option>

</select>
</div>

<div class="Image fox">
    <div class="form-group">
                                            <label>Upload Image</label>
                                            <input class="form-control"type="file" name="image3">
                                        </div>
</div>

<div class="Video fox">
   <div class="form-group">
                                            <label>Upload Video</label>
                                            <input class="form-control"type="file" name="image4">
                                        </div>

                                        <div class="form-group">
                                            <label>Upload Video Url</label>
                                            <input class="form-control"type="url" name="url" placeholder="Enter video Url">
                                        </div>
                                          
</div>
                                           

                                            


                                       
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                       
                                    </form>
                                </div>
                               

                                <!-- /.col-lg-6 (nested) -->
                             
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

<!-- **********************Use For HIde and Show box -->

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".fox").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".fox").hide();
            }
        });
    }).change();
});
</script>