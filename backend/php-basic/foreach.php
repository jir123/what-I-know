
<?php
    $character = ['Jahirul Islam Razu', 'Shadia Akther Munny','Sanjina Afrin Thana', 'Kamrul Islma Rakib'];  
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      <style>
          h1{
              font-size:28px;
              color:#8585ba;
          }
          ul {
              text-style:none;
          }
          li {
              font-size:20px;
              color:#8a8cab;
          }
      </style>
  </head>
  <body>
      <h1>Foreach Loop</h1>
      <ul>
          <?php
          foreach($character as $value){
              echo "<li>$value</li>";
          }
          ?>
      </ul>
  </body>
  </html>