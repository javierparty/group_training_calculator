<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Training Sessions Calculator</title>
</head>
<body>
  <h1>Details (Step 2 of 2)</h1>
  <form action="index.php" method="POST" id="form">
    <input type="hidden" name="key" value="details">
    <?php 
      for($i = 1; $i <= $_SESSION['numPeople']; $i++) { ?>
        <label for="name_<?=$i?>">Name of person <?=$i?></label>
        <input type="text" name="name_<?=$i?>" id="name_<?=$i?>">
        <label for="name_<?=$i?>_personSessions">Number of booked sessions</label>
        <input type="number" name="name_<?=$i?>_personSessions" id="name_<?=$i?>_personSessions">
        <br><br>
      <?php }
    ?>
    <input type="radio" name="fairness" id="fairness_1" value="1">
    <label for="fiarness_1">Calulate so that each person pays the same amount per session, ignoring the different number of sessions booked by each of them. In this way, the session price for each person is not influenced by the number of people participating.</label><br>
    <input type="radio" name="fairness" id="fairness_2" value="2">
    <label for="fiarness_2">Calulate on the basis that a session with more people should ne cheaper for each participant and a session with less people shoul be more expensive for each participant. In this way, the price for each person varies depending on the number of sessions booked.</label><br>
    <input type="radio" name="fairness" id="fairness_3" value="3">
    <label for="fairness_3">Calculate so that each person pays the same total cost, ignoring the number of booked sessions.</label><br>
    <input type="submit" value="Calculate" id="submit">
  </form>
</body>
</html>