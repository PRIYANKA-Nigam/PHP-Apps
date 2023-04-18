<?php
// $url=base_url().'assets/quiz/android.json';
// $url=base_url().'assets/quiz/c_file.json';
// $url=base_url().'assets/quiz/container_VM.json';
// $url=base_url().'assets/quiz/cplusplus.json';
// $url=base_url().'assets/quiz/docker.json';
// $url=base_url().'assets/quiz/git.json';
// $url=base_url().'assets/quiz/java.json';
// $url=base_url().'assets/quiz/jdbc.json';
// $url=base_url().'assets/quiz/jenkins.json';
// $url=base_url().'assets/quiz/Kubernetes.json';
// $url=base_url().'assets/quiz/microservice.json';
// $url=base_url().'assets/quiz/phpDoc.json';
// $url=base_url().'assets/quiz/rest_api.json';
// $url=base_url().'assets/quiz/spring.json';
$url=base_url().'assets/quiz/azure.json';
$json_str=file_get_contents($url);
//echo $json_str."<br>";
try{
    $json_array=json_decode($json_str,true);
foreach($json_array as $key => $arrays){
   // echo $key . "<br />";
    $s='';$c=0;
    foreach($arrays as $array){
        foreach($array as $key => $value){   $t='';
         //  echo $key . " => " . $value . "<br />";
           $c++;
         
           if($c<=6)
          {   $array = [];
              $s.=$value.',';}
            else
           { $c=1;
               $t=$value;
           $s= rtrim($s, ',');
            $array =explode(",",$s);
            $data= array(
                'question'=>$array[0],
                'option1'=>$array[1],
                'option2'=>$array[2],
                'option3'=>$array[3],
                'option4'=>$array[4],
                'answer'=>$array[5]
            );
           
        //  try{  $this->db->insert('quiz',$data);  }
        //  catch(mysqli_sql_exception $e){
        //     $e->getMessage();
        //  }
        // try{  $this->db->insert('cquiz',$data);  }
        //  catch(mysqli_sql_exception $e){
        //     $e->getMessage();
        //  }
        // try{  $this->db->insert('container',$data);  }
        //  catch(mysqli_sql_exception $e){
        //     $e->getMessage();
        //  }
        // try{  $this->db->insert('c++',$data);  }
        // catch(mysqli_sql_exception $e){
        //    $e->getMessage();
        // }
        // try{  $this->db->insert('docker',$data);  }
        // catch(mysqli_sql_exception $e){
        //    $e->getMessage();
        // }
        // try{  $this->db->insert('git',$data);  }
        // catch(mysqli_sql_exception $e){
        //    $e->getMessage();
        // }
        // try{  $this->db->insert('java',$data);  }
        // catch(mysqli_sql_exception $e){
        //    $e->getMessage();
        // }
        // try{  $this->db->insert('jdbc',$data);  }
        // catch(mysqli_sql_exception $e){
        //    $e->getMessage();
        // }
        // try{  $this->db->insert('jenkins',$data);  }
        // catch(mysqli_sql_exception $e){
        //    $e->getMessage();
        // }
        // try{  $this->db->insert('kubernetes',$data);  }
        // catch(mysqli_sql_exception $e){
        //    $e->getMessage();
        // }
        // try{  $this->db->insert('microservice',$data);  }
        // catch(mysqli_sql_exception $e){
        //    $e->getMessage();
        // }
        // try{  $this->db->insert('php',$data);  }
        // catch(mysqli_sql_exception $e){
        //    $e->getMessage();
        // }
        // try{  $this->db->insert('rest',$data);  }
        // catch(mysqli_sql_exception $e){
        //    $e->getMessage();
        // }
        // try{  $this->db->insert('spring',$data);  }
        // catch(mysqli_sql_exception $e){
        //    $e->getMessage();
        // }
        try{  $this->db->insert('azure',$data);  }
        catch(mysqli_sql_exception $e){
           $e->getMessage();
        }
          
         $s='';
         $s=$t.',';
        }
       
        }
    }
    echo "<br />";
}
}catch (JSONException $e){
 $e->getMessage();
}
?>