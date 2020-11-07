<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    </select>
    <div class="container">
      <div class="row">
        <div class="col">
          <h2><?php echo "Jasmine D. Rakim";?></h4>
        </div>

        <form id="calcu" method="post">
        <div class="col">
          <h3><?php echo "Calculator"; ?></h3>
            <p><?php echo "Input first number:" ?></p>
              <input type="text" name="num1" placeholder="" required>
            <p><?php echo "Input second number:" ?></p>
              <input type="text" name="num2" placeholder="" required>
            <p></p>
            <button type="submit" name="sum">+</button>
            <button type="submit" name="sub">-</button>
            <button type="submit" name="mul">*</button>
            <button type="submit" name="div">/</button>
        </form>
          <?php
              if (isset($_POST['sum']))
              {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $sum = $num1 + $num2;
                echo "<p>";
                echo "Answer: ".$sum;
              }
              if (isset($_POST['sub']))
              {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $sub = $num1 - $num2;
                echo "<p>";
                echo "Answer: ".$sub;
              }
              if (isset($_POST['mul']))
              {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $mul = $num1 * $num2;
                echo "<p>";
                echo "Answer: ".$mul;
              }
              if (isset($_POST['div']))
              {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $div = $num1 / $num2;
                echo "<p>";
                echo "Answer: ".$div;
              }
          ?>
        </div>

        <form id="GCD" method="post">
        <div class="col">
          <h3><?php echo "Finding GCD"; ?></h3>
            <p><?php echo "Input first number:" ?></p>
              <input type="text" name="num1" placeholder="" required>
            <p><?php echo "Input second number:" ?></p>
              <input type="text" name="num2" placeholder="" required>
            <p>
            <button type="submit" name="gcd">Submit</button>
            </form>

            <?php
            if(isset($_POST['gcd']))
            {
              $num1 = $_POST['num1'];
              $num2 = $_POST['num2'];
              $gcd = $_POST['gcd'];

              if($num1 > $num2)
              {
                $temp = $num1;
                $num1 = $num2;
                $num2 = $temp;
              }
              for($i = 1; $i < ($num1 + 1); $i++ )
              {
                if ($num1 % $i == 0 and $num2 % $i == 0)
                $gcd = $i;
              }
              echo "<p>";
              echo "Answer: ".$gcd;
            }
          ?>

          <style media="screen">
            h2
            {
              position: relative; left: 100px; top: 190px;
            }
            #calcu
            {
              position: relative; top: 120px;
            }
            #GCD
            {
              position: relative; top: 120px;
            }
            .col
            {
              float: left;
              width: 27%;
            }
            .row:after
            {
                content: "";
                display: table;
                clear: both;
            }
          </style>

        </div>
      </div>
    </div>
  </body>
</html>
<!-- Rakim, Jasmine D.
Diploma in Information Communication III-I
Assignment One -->
