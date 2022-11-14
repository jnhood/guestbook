<?php
  //retrieve the input data from the post
  $name = filter_input(INPUT_POST, "name");
  $comment = filter_input(INPUT_POST, "comment");

  function addGuestbookEntry($name, $comment) {
  //Store data into a file 
  $fp = fopen("guestbook.csv", "a");
  fputcsv($fp, [$name, $comment]);
  fclose($fp);
  }

  addGuestbookEntry($name, $comment);
  header('Location: index.php?m=1');
  exit;

  