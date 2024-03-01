<?php

/* 
  This program calculates the price per person of a dynamic training group. 
  It considers different approaches to fairness.
  You have to give the following data:
  - Step 1: Total cost, number of people and number of training sessions.
  - Step 2: Number of sessions booked by each person, and select the fairness model to be applied.
  The results show you the fair price that each person has to pay.
*/

session_start();

// Step 1 - Gathers the basic data through a form
if(!isset($_POST['key'])) {
  include 'form_1.php';
  exit;
}

// Step 2 - Gathers the details through a second form
if($_POST['key'] == 'main') {
  $_SESSION['totalCost'] = $_POST['totalCost'];
  $_SESSION['numPeople'] = $_POST['numPeople'];
  $_SESSION['numSessions'] = $_POST['numSessions'];
  include 'form_2.php';
  exit;
}

// Step 3 - Shows the results
$fairness = $_SESSION['fairness'] = $_POST['fairness'];
$totalCost = $_SESSION['totalCost'];
$numPeople = $_SESSION['numPeople'];
$numSessions = $_SESSION['numSessions'];

$money = new NumberFormatter('de_DE', NumberFormatter::CURRENCY);
$displayTotal = $money->formatCurrency($totalCost, 'EUR');

if($fairness == 3) { 
  $displayPrice = $money->formatCurrency($totalCost/$numPeople, 'EUR');
  include 'results.php';
  exit;
}

else {
  for($i = 1; $i <= $numPeople; $i++) {
    $p[$i]['name'] = $_SESSION['person'.$i]['name'] = $_POST['name_'.$i];
    $p[$i]['bookedSessions'] = $_SESSION['person'.$i]['personSessions'] = $_POST['name_'.$i.'_personSessions'];
  }

  if($fairness == 2) {
    $sessionPrice = $totalCost/$numSessions;
  
    for($i = 1; $i <= $numSessions; $i++) {
      $sessions[$i] = 0;
    }
    
    for($i = 1; $i <= $numPeople; $i++) {
      $_SESSION['person'.$i]['totalPrice'] = 0;
      
      for($j = 1; $j <= $numSessions; $j++) {
        if($j <= $p[$i]['bookedSessions']) {
          $sessions[$j] += 1;
        }      
      }

      foreach ($sessions as $n => $s) {
        if($n <= $p[$i]['bookedSessions']) {
          $_SESSION['person'.$i]['totalPrice'] += $sessionPrice/$s;
          $_SESSION['person'.$i]['sessionsNumPeople'][$n] = $sessions[$n];
        }
      }    
    }

    for ($i = 1; $i <= $numPeople ; $i++) { 
      echo $p[$i]['name'].' participates in '.$p[$i]['bookedSessions'].' of '.$numSessions.' sessions (';
      $personSessions = array_slice($sessions, 0, $p[$i]['bookedSessions']);
      $personSessions = array_count_values($personSessions);
      $detail = '';
      foreach ($personSessions as $snp => $n) {
        $detail .= $n.' with '.$snp.' participants, ';
      }
      $displayPrice = $money->formatCurrency($_SESSION['person'.$i]['totalPrice'], 'EUR');  
      echo substr($detail, 0, -2).'), and pays: ' .$displayPrice.'<br>';
    }
    
    exit;
  }

  else {
    $numPersonSessions = 0;
    for($i = 1; $i <= $numPeople; $i++) {
      $numPersonSessions += $p[$i]['bookedSessions'];
    }
    $sessionPrice = ($totalCost/$numPersonSessions);
    
    for($i = 1; $i <= $numPeople; $i++) {
      $displayPrice = $money->formatCurrency($p[$i]['bookedSessions'] * $sessionPrice, 'EUR');
      echo $p[$i]['name'].' participates in '.$p[$i]['bookedSessions'].' of '.$numSessions.' sessions, and pays '.$displayPrice.'<br>';
    }    
    exit;
  }
}

include_once 'results.html';