<!-- Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60-->

<?php

 $matches = [

   'match1' => [
     'team_home' => 'Chicago Bulls',
     'home_points' => 115,
     'team_away' => 'Utah Jazz',
     'away_points' => 98
    ],
    'match2' => [
      'team_home' => 'LA Lakers',
      'home_points' => 102,
      'team_away' => 'LA Clippers',
      'away_points' => 90
    ],
    'match3' => [
      'team_home' => 'Detroit Pistons',
      'home_points' => 96,
      'team_away' => 'Orlando Magic',
      'away_points' => 105
    ]

 ];

 foreach ($matches as $match) {

   echo $match['team_home'] . ' - ' . $match['team_away'];
   echo ' / ';
   echo $match['home_points'] . ' - ' . $match['away_points'];
   echo '<br>';

 }

?>
