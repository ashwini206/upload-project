<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Upload extends CI_Controller {  
      //functions  
    public function insert()
    {
      

 
             $config['upload_path'] = 'html/image';
            $config['allowed_types'] = 'jpeg|jpg|Png|PNG|png|gif'; 
            $config['max_size'] = '1000000';
            $config['max_width']  = '1024000';
            $config['max_height']  = '768000';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
          $this->upload->do_upload('image3');
          $path3=$_FILES['image3']['name'];
            //var_dump($path);
        $img3=base_url().'html/image/'.$path3;
   
         $config['upload_path'] = 'html/image/';
            $config['allowed_types'] = 'mov|mp4|mp3'; 
            /*$config['max_size'] = '10000';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';*/
            $config['max_size'] = '1000000';
            $config['max_width']  = '1024000';
            $config['max_height']  = '768000';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('image4');
            @$path4=$_FILES['image4']['name'];
            $img4=base_url().'html/image/'.$path4;



     if  ($_FILES['image3']['name']=='' && $_FILES['image4']['name']=='')
        {

               $course_data=array(

                          
                'User_Name'=>$_POST['user_name'],
                'Mobile_No'=>$_POST['mobile_no'],
                'type'=>$_POST['type'],
                
                
                'video_url'=>$_POST['url']



        );
            }
            else if($_FILES['image3']['name']!==''&& $_FILES['image4']['name']=='')
            {

                   $course_data=array(

                          
                'User_Name'=>$_POST['user_name'],
                'Mobile_No'=>$_POST['mobile_no'],
                'type'=>$_POST['type'],
                
                'image'=>$img3,
                'video_url'=>$_POST['url']



        );

            }
             else if($_FILES['image3']['name']==''&& $_FILES['image4']['name']!=='')
            {

               
                 
                  $course_data=array(

                       
                'User_Name'=>$_POST['user_name'],
                'Mobile_No'=>$_POST['mobile_no'],
                'type'=>$_POST['type'],
                
                'video'=>$img4,
                'video_url'=>$_POST['url']



        );

            }
           

         else 

         {
        
         $course_data=array(
          
                'User_Name'=>$_POST['user_name'],
                'Mobile_No'=>$_POST['mobile_no'],
                'type'=>$_POST['type'],
                'image'=>$img3,
                'video'=>$img4,
                
                
                'video_url'=>$_POST['url']



        );

        }

          
     
            $i = $this->db->insert('user',$course_data);
            if($i)
            {

 ?>
            <script type="text/javascript">alert('Sucessfully Upload your form');window.location.href='<?php echo base_url();?>Home';</script>
            <?php
            }
            else
            {
                   ?>
            <script type="text/javascript">alert('Fail');window.location.href='<?php echo base_url();?>Home/Add_form';</script>
            <?php
            }
  

    }
      
      }
      ?>