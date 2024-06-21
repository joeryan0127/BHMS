<?php


// if(isset($_FILES['resident']['name'])){
// include "xlsx.php";

// $excel = SimpLeXLSX::parse(($_FILES['resident']['tmp_name']));
// echo "<pre>";
// print_r($excel->rows());
// $i=0;
//   foreach ($excel->rows() as $key =>$row){

  // print_r($row);
//   $q="";
//    foreach ($row as $key => $cell){
//     print_r($cell); echo "<br>";
//     if($i==0){
//       $q.=$cell. "varchar(50),";
//     }else{
//       $q.=$cell. ",";
//     }
 
      

//    } 
//   if($i==0){

//   }
//    echo $q; echo "<br>";
//    $i++;
// $query ="INSERT INTO account VALUES (".rtrim($q,",").") ";
//   }


  // $statement = $conn ->prepare("INSERT INTO account ( A_Completename ,A_username ,	A_password, A_type) 
  // VALUES ( :name, :Uname,:Pass, :type)");
  
  // $statement->bindValue(':name',  $name);
  // $statement->bindValue(':Uname', $age);
  // $statement->bindValue(':Pass', $country);
  // $statement->bindValue(':type', $type);

  
  // $result = $statement ->execute(); 
 

// }
$connect = mysqli_connect("localhost", "root", "", "mayana");

if(isset($_POST["resbot"])){
if ($_FILES['resident']['name'] == "")
{
  header('Location:../secHupload.php?error=Nofile');
  exit();
}else {
 
  if($_FILES['resident']['name'])
  {
    $filename = explode(".", $_FILES['resident']['name']);
    if($filename[1] == 'csv'){

      $handle = fopen($_FILES['resident']['tmp_name'], "r");
      while($data = fgetcsv($handle))//handling csv file 
      {
        $item1 = mysqli_real_escape_string($connect, $data[0]);  
        $item2 = mysqli_real_escape_string($connect, $data[1]);
        $item3 = mysqli_real_escape_string($connect, $data[2]);
        $item4 = mysqli_real_escape_string($connect, $data[3]);
       
       

        $query = "INSERT into houshold(	P_id	, H_member ,	H_headoffamily, 	govBenefits ) 
        values('$item1','$item2','$item3','$item4' )";
        mysqli_query($connect, $query);
    }
    fclose($handle);
echo "File sucessfully imported";
header('Location:../secHupload.php?error=Noerror');
  }
  }
}





}

//   $file = $_FILES['resident']['tmp_name'];
//   $handle = fopen($file, "r");
//   $c = 0;
//   while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
//             {
//  $fname = $filesop[0];
//  $lname = $filesop[1];

//  $statement = $conn ->prepare("INSERT INTO account ( A_Completename ,A_username) 
//   VALUES ( :fname, :lname)");
  
//   $statement->bindValue(':fname',  $fname);
//   $statement->bindValue(':lname', $lname);
//  $result = $statement ->execute($statement); 

// }



?>