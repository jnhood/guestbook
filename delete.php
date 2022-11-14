<?php

function deleteGuestboook(){
  unlink("guestbook.csv");
  file_put_contents("guestbook.csv","");
}

deleteGuestbook();