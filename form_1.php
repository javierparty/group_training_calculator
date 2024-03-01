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
<script>
  // let numPeopleInput = document.getElementById('numPeople');
  // numPeopleInput.addEventListener('input', function() { displayPeoplesSessions(this.value); });

  // function displayPeoplesSessions(numPeople) {
  //   let form = document.getElementById('form'),
  //       formSubmit = document.getElementById('submit');
  //   for (var i = 1; i <= numPeople; i++) {
  //     let newInput = document.createElement('input'),
  //         newInputLabel = document.createElement('label');
  //     newInput.name = newInput.id = 'person' + i;
  //     newInput.type = 'number';
  //     newInputLabel.for = newInput.id;
  //     newInputLabel.innerHTML = 'Number of booked sessions of person ' + i;
  //     form.insertBefore(newInputLabel, formSubmit);
  //     form.insertBefore(newInput, formSubmit);
  //   }    
  // } 
</script>
</html>