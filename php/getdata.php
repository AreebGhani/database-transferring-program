<?php

session_start();

ob_start();

extract($_POST);

if(isset($_POST['getbtn'])) {

  if(isset($_SESSION['getdata'])){

    $connect1 = mysqli_connect($_SESSION['Server1'], $_SESSION['User1'], $_SESSION['Password1'], $_SESSION['Database1']);

    $query1 = "select * from ". $_SESSION['Table1'];

    $result1 = mysqli_query($connect1,$query1);

    if(mysqli_num_rows($result1) > 0) {

      if(isset($_SESSION['Column1'])){
     
        $Column1 = $_SESSION['Column1'];
        $table = "
         <table class='responsive-table center highlight'>
         <tr>
         <th>".$Column1."</th>
        ";
            
      };
     
      if(isset($_SESSION['Column2'])){
  
        $Column2 = $_SESSION['Column2'];
        $table .= " <th>".$Column2."</th> ";
           
      };
      
      if(isset($_SESSION['Column3'])){
      
        $Column3 = $_SESSION['Column3'];
        $table .= " <th>".$Column3."</th> ";
            
      };
      
      if(isset($_SESSION['Column4'])){
        
        $Column4 = $_SESSION['Column4'];
        $table .= " <th>".$Column4."</th> ";
     
      };
      
      if(isset($_SESSION['Column5'])){
     
        $Column5 = $_SESSION['Column5'];
        $table .= " <th>".$Column5."</th>
        </tr> ";
            
      };

      while($data =  mysqli_fetch_array($result1)) {
        
        if(isset($_SESSION['Column1'])){
     
          $Column1 = $_SESSION['Column1'];
          $table .= "<tr>
          <td>".$data[$Column1]."</td>";
  
        };
        
        if(isset($_SESSION['Column2'])){
         
          $Column2 = $_SESSION['Column2'];
          $table .= "<td>".$data[$Column2]."</td>";
      
        };
       
        if(isset($_SESSION['Column3'])){
    
          $Column3 = $_SESSION['Column3'];
          $table .= "<td>".$data[$Column3]."</td>";
     
        };
    
        if(isset($_SESSION['Column4'])){
      
          $Column4 = $_SESSION['Column4'];
          $table .= "<td>".$data[$Column4]."</td>";
       
        };
        
        if(isset($_SESSION['Column5'])){
         
          $Column5 = $_SESSION['Column5'];
          $table .= "<td>".$data[$Column5]."</td>
          </tr>";
        
        };

      };

    };

    echo $table."<br/><br/><button class='btn green waves-effect' id='getbtn'><a href='./php/insertdata.php' class='white-text'>Insert Data</a></button><br/><br/>";

  } else {

    echo "<br><h6 class='red-text'><strong>Can't Get Data . . . ! !</strong></h6>";

  };

};

?>