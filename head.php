<?php 
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/DataBase/connect.php');
$result = $conn->query("SELECT * FROM setting WHERE muc = 'tenWeb'");
$result1 = $conn->query("SELECT * FROM setting WHERE muc = 'description'");
$row = $result->fetch(PDO::FETCH_ASSOC);
$row1 = $result1->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    
     <link href="/fonticon/css/all.css" rel="stylesheet"> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title><?=$row['giatri']?> - <?=$row1['giatri']?></title>
     <link rel="shortcut icon" href="https://iamhoang.vn/images/upload/iamhoang7.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:title" content="<?=$row['giatri']?>" />
    <meta name="description" content="<?=$row1['giatri']?>">
    <meta property="og:image" content="images\thumb_low1.jpg" /> 
    <meta name = "format-detection" content = "telephone=no">
    <link rel="stylesheet" href="css\bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="css\all.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="css\simple-line-icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="css\slick.css" type="text/css" media="all">
    <link rel="stylesheet" href="css\animate.css" type="text/css" media="all">
    <link rel="stylesheet" href="css\magnific-popup.css" type="text/css" media="all">
    <link rel="stylesheet" href="css\style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css\custom.css" type="text/css" media="all">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/atropos@2/atropos.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>


    </head>