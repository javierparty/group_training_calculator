<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Training Sessions Calculator</title>
</head>
<body>
  <h1>Main (Step 1 of 2)</h1>
  <form action="index.php" method="POST" id="form">
    <input type="hidden" name="key" value="main">
    <label for="totalCost">Total Cost</label>
    <input type="number" name="totalCost" id="totalCost">
    <label for="numPeople">Number of People</label>
    <input type="number" name="numPeople" id="numPeople">
    <label for="numSessions">Number of Sessions</label>
    <input type="number" name="numSessions" id="numSessions">
    <input type="submit" value="Next" id="submit">
  </form>
</body>
</html>