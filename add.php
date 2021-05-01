<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="handle-add-product.php" method="POST">
      <input type="text" name="name" placeholder="enter product name"  >
      <br>
      <textarea name="dec"  placeholder="description" cols="30" rows="10"></textarea>
       <br>
      <input type="number" name="price" placeholder="enter  product price" >
      <br>
      <input type="submit" value="submit" name="submit">
    
    </form>
</body>
</html>