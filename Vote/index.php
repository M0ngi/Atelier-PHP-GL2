<html>

 <body>
  <form method=POST>
   Evaluer le contenu du cours PHP:<br/>
   <input value=Bon type=radio name=choix />Bon<br/>
   <input value=Moyen type=radio name=choix />Moyen<br/>
   <input value=MAUVAIS type=radio name=choix />MAUVAIS.<br/>
   
   <br/>
   <button name=submit type=submit>Voter</button>
  </form>


  <?php
   if(isset($_COOKIE['voted'])){
  ?>
   <b>You've already voted! Your vote is <?=$_COOKIE['voted']?></b>
  <?php
   } else{
    setcookie("voted", $_POST['choix'], time() + 60*2);
   }
  ?>

 </body>
</html>
