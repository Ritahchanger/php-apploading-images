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
   <form action="upload.php"method="POST"enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="text"name="name"placeholder="Type image name.."style="width:100%;height:40px;margin:0.2rem 0rem">
   <input type="text"name="categories"placeholder="Type image categories.."style="width:100%;height:40px;margin:0.2rem 0rem">
    <button type="submit"name="submit">
        UPLOAD
   </button>
   </form>
   <a href="display.php">Display already inserted images.?</a>
   </div> 
   
</body>
</html>