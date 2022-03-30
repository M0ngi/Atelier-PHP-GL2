<?php
session_start();
?>
<html>

 <body>
  <form action="/GoogleKeep/add_note.php" method=POST>
   Note: <input name="note" type=text /> <button type=submit>Add</button>
  </form>
  
  <?php
   if(isset($_SESSION['notes'])) {
    foreach($_SESSION['notes'] as $note){
  ?>
     <div>
      <?=$note?>
     </div>
  <?php
    }
   }
   else {
    echo "<b>You don't have any notes, start by adding one!</b>";
   }
  ?>
 </body>
</html>
