<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Mayana";


$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) { 
    die("Connection failed: " . $con->connect_error);
}
else
{

}

$DB_TBLName = "resident"; 
$filename = "residentFile";  
$file_ending = "xls";  

header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");

$sep = "\t";

$sql="SELECT purok.P_name , householdNO , R_firstname, R_Middilename, R_Lastname,TIMESTAMPDIFF(YEAR, R_birthdate , CURDATE()) AS AGE, R_gender,R_bloodtype, R_birthdate, R_Birthplace, 	R_status, R_religion, R_nationality, Pwd FROM resident INNER JOIN purok ON resident.P_id = purok.P_id"; 
$resultt = $con->query($sql);
while ($property = mysqli_fetch_field($resultt)) { 
    echo $property->name."\t";
}

print("\n");    

while($row = mysqli_fetch_row($resultt)) 
{
    $schema_insert = "";
    for($j=0; $j< mysqli_num_fields($resultt);$j++)
    {
        if(!isset($row[$j]))
            $schema_insert .= "NULL".$sep;
        elseif ($row[$j] != "")
            $schema_insert .= "$row[$j]".$sep;
        else
            $schema_insert .= "".$sep;
    }
    $schema_insert = str_replace($sep."$", "", $schema_insert);
    $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
    $schema_insert .= "\t";
    print(trim($schema_insert));
    print "\n";
}
?>