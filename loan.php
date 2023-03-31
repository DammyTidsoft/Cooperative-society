<?php 
    if(isset($_POST['register']))
    {
        $m_no = $_POST['m_no'];
        $l_of = $_POST['l_of'];
        $desire = $_POST['desire'];
        $r_month = $_POST['r_month'];
        $p_start = $_POST['p_start'];
        $p_end = $_POST['p_end'];
        $su1_name = $_POST['su1_name'];
        $su1_mno = $_POST['su1_mno'];
        $su2_name = $_POST['su2_name'];
        $su2_mno = $_POST['su2_mno'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        move_uploaded_file($image_tmp,"images/$image");

        $con = mysqli_connect("localhost","root","","alkawthar");

        $query = "insert into  loan (m_no,l_of,desire,r_month,p_start,p_end,su1_name,su1_mno,su2_name,su2_mno,image) values ('$m_no','$l_of','$desire','$r_month','$p_start','$p_end','$su1_name','$su1_mno','$su2_name','$su2_mno','$image')";

        $result = mysqli_query($con, $query);

        if($result==1)
        {       

        echo "Inserted successfully";
        
        }
        else {       

        echo "Insertion Failed";

             }
    }
?>