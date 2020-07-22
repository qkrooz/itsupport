<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
$user = $_SERVER['AUTH_USER'];
include 'serverConnection.php';
if($conn){
    //catchingUser
    $sso = trim($user, 'LOGON\\');
    $sql = "SELECT * FROM ITUSERS Where Sso = $sso";
    $stmt = sqlsrv_query($conn,$sql);
    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        $loguser = $row['Name'];
        $logsso = $row['Sso'];
        $loglogonuser = 'LOGON\\'.$logsso;
        $loguserpic = 'https://supportcentral.gecdn.com/images/person/temp/'.$logsso.'.jpg';
        $logmail = $row['Email'];
    }
    //catchingEmails
    $sql = "SELECT Email FROM ITUSERS";
    $stmt = sqlsrv_query($conn,$sql);
    $emails = array();
    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        $emails[] = $row['Email'];
    }
    $to = implode(',',$emails);
}




// switch ($user){
//     case 'LOGON\212559103': 
//         $loguser = 'Victor Martinez'; 
//         $userpic = 'https://supportcentral.gecdn.com/images/person/temp/212559103.jpg'; 
//         $sso='212559103';
//     break;
//     case 'LOGON\212774780': 
//         $loguser = 'Cesar Ibarra'; 
//         $userpic = 'https://supportcentral.gecdn.com/images/person/temp/212774780.jpg'; 
//         $sso='212774780';
//     break;
//     case 'LOGON\212687717': 
//         $loguser = 'Isamar Gonzalez'; 
//         $userpic = 'https://supportcentral.gecdn.com/images/person/temp/212687717.jpg'; 
//         $sso='212687717';
//     break;
//     case 'LOGON\212771640': 
//         $loguser = 'Cesar Villasenor'; 
//         $userpic = 'https://supportcentral.gecdn.com/images/person/temp/212771640.jpg'; 
//         $sso='212771640';
//     break;
//     case 'LOGON\212756443': 
//         $loguser = 'Alan Sanchez'; 
//         $userpic = 'https://supportcentral.gecdn.com/images/person/temp/212756443.jpg'; 
//         $sso='212756433';
//     break;
//     case 'LOGON\503142180': 
//         $loguser = 'Andres Olaves'; 
//         $userpic = 'https://supportcentral.gecdn.com/images/person/temp/503142180.jpg'; 
//         $sso='503142180';
//     break;
//     case 'LOGON\503125245': 
//         $loguser = 'Adriana Rios'; 
//         $userpic = 'https://supportcentral.gecdn.com/images/person/temp/50312524.jpg'; 
//         $sso='50312524';
//     break;
// }
