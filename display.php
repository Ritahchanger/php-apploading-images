<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
    <h1><a href="#">DISPLAYING THEM</a></h1>

    <?php
      include "connect.php";
      $sql="select * from imageshower";
      $result=mysqli_query($connect,$sql);
      while($row=mysqli_fetch_assoc($result)){
        $rowImg=$row['imageName'];
        $imageName=$row['imageCategories'];
        $imageId=$row['imageId'];
        echo "<img src='uploads/$rowImg'style='margin:0.3rem 0rem;'>
        <a href=''>$imageName</a>
        <a href='delete.php?id=$imageId'><button type='submit'>Delete</button></a>
        ";
      }
    ?>
    <img src="../dashboard/images/twitter-bird.png" alt="">
   </div> 
   
</body>
</html>