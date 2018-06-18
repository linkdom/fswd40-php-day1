<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercise 3</title>
  </head>
  <body>

    <?php
  $mon = "monday";
  $tue = "tuesday";
  $wed = "wednesday";
  $thu = "thursday";
  $fri = "friday";
  $sat = "saturday";
  $sun = "sun";

    if ($mon == "monday") {
      echo "Today is" . $mon;
    } elseif ($tue == "tuesday")
    {
      echo "Today is" .$tue;
    } elseif ($wed == "wednesday")
    {
      echo "Today is" .$wed;
    } elseif ($thu == "thursday")
    {
      echo "Today is" .$thu;
    } elseif ($fri == "friday")
    {
      echo "Today is" .$fri;
    } elseif ($sat == "saturday")
    {
      echo "Today is" .$sat;
    } elseif ($sun == "sunday")
    {
      echo "Today is" .$sun;
    } else {
      echo "noday";
    }

    ?>

  </body>
</html>
