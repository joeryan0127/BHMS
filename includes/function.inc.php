<?php

        function passMatch($pass, $rpass){
            $result;
            
            if($pass !==$rpass ){
                $result = true;
            
            }else{
            
                $result = false;
            }
            return $result;
            }
    
            function passMatch1($pass, $rpass){
                $result;
                
                if($pass !==$rpass ){
                    $result = true;
                
                }else{
                
                    $result = false;
                }
                return $result;
                }

                
            
    function creatUser($conn, $fname, $Uname, $pass, $type){

        $stmt =$conn->prepare("INSERT INTO account ( A_Completename, A_username , A_password, A_type) 
        VALUES (:fullname, :uname, :pass, :types)");
    
        $hashedpwd = password_hash($pass, PASSWORD_DEFAULT);
    
        $stmt ->bindValue(':fullname' , $fname);
        $stmt ->bindValue(':uname' , $Uname);
        $stmt ->bindValue(':pass' , $hashedpwd);
        $stmt ->bindValue(':types' , $type);
       
    
        $result = $stmt->execute();
        header("Location:../index.php?error=none");
        exit();
    
        
    }

    function updateUser($conn,$id,$fname, $type1){

        $stmt =$conn->prepare("UPDATE account SET A_Completename=:fullname, A_type=:types WHERE A_id=:id");
        $stmt ->bindValue(':fullname',$fname);

        $stmt ->bindValue(':types',$type1);
       
        $stmt->bindValue(':id',$id);
    
        $result = $stmt->execute();
       
        header("location: ../Account.php?error=none");
        exit;     
    
        
    }

    
    function creatUser1($conn, $fname, $Uname, $pass, $type){
        Session_start();
$remark='Approve';
        $stmt =$conn->prepare("INSERT INTO account ( A_Completename, A_username , A_password, A_type, Remark) 
        VALUES (:fullname, :uname, :pass, :types, :remark)");
    
        $hashedpwd = password_hash($pass, PASSWORD_DEFAULT);
    
        $stmt ->bindValue(':fullname' , $fname);
        $stmt ->bindValue(':uname' , $Uname);
        $stmt ->bindValue(':pass' , $hashedpwd);
        $stmt ->bindValue(':types' , $type);
        $stmt ->bindValue(':remark' , $remark);
    
        $result = $stmt->execute();

        $statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


        $account=$_SESSION["uid"];
        
        date_default_timezone_set('Asia/Manila');
        $todays_date = date("y-m-d h:i:sa");
        $today = strtotime($todays_date);
        $time=date("h:i:sa", $today);
        
        $action="Add Account";
        $date = date('Y-m-d');
        
        $statement->bindValue(':id',$account);
        $statement->bindValue(':Ldate', $date);
        $statement->bindValue(':ltime', $time);
        $statement->bindValue(':laction',$action);
        $result = $statement ->execute();         
        

        header("Location:../Account.php?error=none");
        exit();
    
        
    }

    function creatUser2($conn, $fname, $Uname, $pass, $type){

        Session_start();

        $stmt =$conn->prepare("INSERT INTO account ( A_Completename, A_username , A_password, A_type) 
        VALUES (:fullname, :uname, :pass, :types)");
    
        $hashedpwd = password_hash($pass, PASSWORD_DEFAULT);
    
        $stmt ->bindValue(':fullname' , $fname);
        $stmt ->bindValue(':uname' , $Uname);
        $stmt ->bindValue(':pass' , $hashedpwd);
        $stmt ->bindValue(':types' , $type);
       
    
        $result = $stmt->execute();

        $statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


        $account=$_SESSION["Suid"];
        
        date_default_timezone_set('Asia/Manila');
        $todays_date = date("y-m-d h:i:sa");
        $today = strtotime($todays_date);
        $time=date("h:i:sa", $today);
        
        $action="Add Account";
        $date = date('Y-m-d');
        
        $statement->bindValue(':id',$account);
        $statement->bindValue(':Ldate', $date);
        $statement->bindValue(':ltime', $time);
        $statement->bindValue(':laction',$action);
        $result = $statement ->execute();         
        

        header("Location:../SecAccount.php?error=none");
        exit();
    
        
    }

    function userExist($conn, $Uname){

        $stmt = $conn->prepare("SELECT * FROM account WHERE  A_username = :uname");
        $stmt->bindParam(':uname', $Uname);
        $stmt->execute();
    
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        if(!$data){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }


    function userExist1($conn, $Uname){

        $stmt = $conn->prepare("SELECT * FROM account WHERE  A_username = :uname");
        $stmt->bindParam(':uname', $Uname);
        $stmt->execute();
    
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        if(!$data){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    
function loginUser($conn, $Uname, $pass){
    // session_start();
    $stmt = $conn->prepare("SELECT * FROM account WHERE  A_username = :uname ");
    $stmt->bindParam(':uname', $Uname);
    
    $stmt->execute();

    $UserDetails = $stmt->fetch(PDO::FETCH_ASSOC);
    // $session["type"]=$UserDetails["A_type"];

    if(!$UserDetails){

        header("Location:../index.php?error=Wronglogs");
        exit();
    }

    $pwdhashed = $UserDetails["A_password"];
    $checkpwd = password_verify($pass, $pwdhashed );

    if($checkpwd === false ){
        header("Location:../index.php?error=Wrongpass");
        exit();

    // } if($type === "Admin" ){
    //     header("Location:../index.php");
    //     exit();
    // } if($type === "Secretary" ){
    //     header("Location:../secretarydash.php");
    //     exit();
    // } if($type === "BHW" ){
    //     header("Location:../bhwdash.php");
    //     exit();
    // } if($type === "Nurse" ){
    //     header("Location:../nursedash.php");
    //     exit();
    // }
    // if($UserDetails["Remark"]==" "){

    //     header("Location:../index.php?error=notApproved");
    //     exit();

     }else if($UserDetails["Del"]=="Del"){
        header("Location:../index.php?error=deleted");
        exit();
     }else if($UserDetails["A_type"]=="Admin" && $UserDetails["Remark"]=="Approve"){
        session_start();
        $_SESSION["uid"]= $UserDetails["A_id"];  
        $_SESSION["fullname"]= $UserDetails["A_Completename"]; 
        $_SESSION["user1"]= $UserDetails["A_username"]; 
        $_SESSION["type1"]= $UserDetails["A_type"]; 

        $statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


        $account=$_SESSION["uid"];
        
        date_default_timezone_set('Asia/Manila');
        $todays_date = date("y-m-d h:i:sa");
        $today = strtotime($todays_date);
        $time=date("h:i:sa", $today);
        
        $action="Admin Login";
        $date = date('Y-m-d');
        
        $statement->bindValue(':id',$account);
        $statement->bindValue(':Ldate', $date);
        $statement->bindValue(':ltime', $time);
        $statement->bindValue(':laction',$action);
        $result = $statement ->execute(); 

        header("Location:../admindash.php");
        exit();

    
} else if($UserDetails["A_type"]=="Secretary" && $UserDetails["Remark"]=="Approve"){
    session_start();
    $_SESSION["Suid"]= $UserDetails["A_id"];  
    $_SESSION["Sfullname"]= $UserDetails["A_Completename"]; 
    $_SESSION["Suser1"]= $UserDetails["A_username"]; 
    $_SESSION["Stype1"]= $UserDetails["A_type"]; 

    $statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


    $account=$_SESSION["Suid"];
    
    date_default_timezone_set('Asia/Manila');
    $todays_date = date("y-m-d h:i:sa");
    $today = strtotime($todays_date);
    $time=date("h:i:sa", $today);
    
    $action="Secretary Login";
    $date = date('Y-m-d');
    
    $statement->bindValue(':id',$account);
    $statement->bindValue(':Ldate', $date);
    $statement->bindValue(':ltime', $time);
    $statement->bindValue(':laction',$action);
    $result = $statement ->execute(); 


    header("Location:../secretarydash.php");
    exit();

}else if($UserDetails["A_type"]=="BHW" && $UserDetails["Remark"]=="Approve"){
    session_start();
    $_SESSION["bhuid"]= $UserDetails["A_id"];  
    $_SESSION["bhfullname"]= $UserDetails["A_Completename"]; 
    $_SESSION["bhuser1"]= $UserDetails["A_username"]; 
    $_SESSION["bhtype1"]= $UserDetails["A_type"]; 

    $statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


$account=$_SESSION["bhuid"];

date_default_timezone_set('Asia/Manila');
$todays_date = date("y-m-d h:i:sa");
$today = strtotime($todays_date);
$time=date("h:i:sa", $today);

$action="BHW Login";
$date = date('Y-m-d');

$statement->bindValue(':id',$account);
$statement->bindValue(':Ldate', $date);
$statement->bindValue(':ltime', $time);
$statement->bindValue(':laction',$action);
$result = $statement ->execute(); 

    header("Location:../bhwdash.php");
    exit();

}else if($UserDetails["A_type"]=="Nurse" && $UserDetails["Remark"]=="Approve"){
    session_start();
    $_SESSION["Nuid"]= $UserDetails["A_id"];  
    $_SESSION["Nfullname"]= $UserDetails["A_Completename"]; 
    $_SESSION["Nuser1"]= $UserDetails["A_username"]; 
    $_SESSION["Ntype1"]= $UserDetails["A_type"]; 

    $statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


    $account=$_SESSION["Nuid"];
    
    date_default_timezone_set('Asia/Manila');
    $todays_date = date("y-m-d h:i:sa");
    $today = strtotime($todays_date);
    $time=date("h:i:sa", $today);
    
    $action="Nurse Login";
    $date = date('Y-m-d');
    
    $statement->bindValue(':id',$account);
    $statement->bindValue(':Ldate', $date);
    $statement->bindValue(':ltime', $time);
    $statement->bindValue(':laction',$action);
    $result = $statement ->execute(); 

    header("Location:../nursedash.php");
    exit();

}else{
    header("Location:../index.php?error=notApproved");
    exit();
}
}

?>