
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                          User Data Tables
                        </h1>
                    </div>
                </div>
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                     <a href="<?php echo base_url();?>Home/Add_form"><button style="margin-left: 900px; background-color: #225081; color: #fff; border: 1px solid #225081; height: 30px;width: 90px; margin-bottom: 20px;">Add Form</button></a>
                     <br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             User Tables
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>User Name </th>
                                            <th>Mobile No</th>
                                            <th>Image</th>
                                            <th>Video</th>
                                            <th>Video Url</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                         $s = $this->db->query("SELECT * FROM user");
                                         $r = $s->result_array();
                                        
                                    
                                       
                                        
                                         foreach ($r as $key => $r) {
                                             @$uid =$r['id'];

                                           $image = $r['image'];
                                           $video = $r['video'];
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo @$r['id'] ?></td>
                                            <td><?php echo @$r['User_Name']; ?></td>
                                            <td><?php echo @$r['Mobile_No']; ?></td>
                                            <td><img class="upload" src="<?php echo @$image;?>"></td>
                                             <td>
                                               <?php

                                                   if(!empty($video))
                                                   {

                                                   ?>

<video width="320" height="240" controls>
  <source src="<?php echo $video;?>" type="video/mp4">
  
</video> 
<?php

}

else
{

  ?>
 

  <?php
}
?>  
                                                    </td>
                                           <td><?php echo @$r['video_url']; ?></td>
                                        </tr>
                                       <?php
                                   }
                                   ?>
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
           
        </div>
               <footer><p>All right reserved. Template by: <a href="<?php echo base_url();?>html/http://webthemez.com">WebThemez</a></p></footer>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="<?php echo base_url();?>html/assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="<?php echo base_url();?>html/assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="<?php echo base_url();?>html/assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url();?>html/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>html/assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="<?php echo base_url();?>html/assets/js/custom-scripts.js"></script>
   
   
</body>
</html>
<style type="text/css">
    .upload
    {
        min-width:80px;
        min-height:80px;
        max-width:80px;
        max-height:80px;
    }
</style>
