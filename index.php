<?php
class Calculator
{

  public static function calculate($x, $y, $symbol)
  {
    try {
      if ($y == 0 && $symbol === '/') {
        throw new Exception('Divided by zero');
      }
      switch ($symbol) {
        case "+":
          return $x + $y;
        case "-":
          return $x + $y;
        case "*":
          return $x + $y;
        case "/":
          return $x + $y;
      }
    } catch (Exception $e) {
      return $e->getMessage();
    }
  }
}
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
  $x = (float)$_POST["input1"];
  $y = (float)$_POST["input2"];
  $symbol = $_POST["operator"];

  $result = Calculator::calculate($x, $y, $symbol);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>[Bài tập] Ứng dụng Calculator</title>
  <style>
    form>* {
      margin: 5px 0;
    }
  </style>
</head>

<body>
  <h1>[Bài tập] Ứng dụng Calculator</h1>
  <form action="" method="post">
    <input type="number" name="input1" placeholder="Số thứ nhất" required><br>
    <select name="operator">
      <option value="+">Cộng</option>
      <option value="-">Trừ</option>
      <option value="*">Nhân</option>
      <option value="/">Chia</option>
    </select>
    <br>
    <input type="number" name="input2" placeholder="Số thứ hai" required><br>
    <input type="submit" value="Tính">
  </form>
  <?php if (isset($result)) : ?>
    <h4><?= "Kết quả: $result" ?></h4>
  <?php endif; ?>
</body>

</html>
