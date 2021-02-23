<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>課題1-2</title>
</head>
<body>
  <form method="post">
    <input type="text" name="text"><input type="submit" value="OK">
  </form>
  <?php
    $fruits = ['apple', 'orange', 'strawberry'];
    $result = $_POST[text];
    if(!empty($result)) {
      if(in_array($result, $fruits)) {
        $msg = $result.'は、配列fruitsの中に存在してます';
      }else{
        $msg = $result.'は、配列fruitsの中に存在してません';
      }
    }
  ?>
  <p><?php echo $msg ?></p>
</body>
</html>