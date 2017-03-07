<?php

if(!empty($_POST['first_name']) and !empty($_POST['email']) and !empty($_POST['textarea1'])) {

$email_to = "josevallecer@knights.ucf.edu";

$email_subject = "Customer Message";

$sender = $_POST['first_name']; // required

$email_from = $_POST['email']; // required

$comments = $_POST['textarea1']; // required

$email_message = "Form Details:\n\n";



function clean_string($string) {

  $bad = array("content-type","bcc:","to:","cc:","href");

  return str_replace($bad,"",$string);

}



$email_message .= "Name: ".clean_string($sender)."\n";

$email_message .= "Email: ".clean_string($email_from)."\n";

$email_message .= "Message: ".clean_string($comments)."\n";

$headers = 'From: '.$email_from."\r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers);
echo "<script type='text/javascript'>$('#modal1').openModal();</script>";
?>

<?php

}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Recall - Jose Vallecer</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    <nav class="grey darken-4" role="navigation">
    <div class="nav-wrapper container ">
      <a id="logo-container" href="home.html" class="brand-logo">o<span  class="orange-2">v</span>ert<span class="orange-2">u</span>re</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="home.html">Home</a></li>
        <li><a href="heroes.html">Heroes</a></li>
        <li><a href="recall.php">Recall</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="home.html">Home</a></li>
        <li><a href="heroes.html">Heroes</a></li>
        <li><a href="recall.php">Recall</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="row">
    <div class="col s12 m8 offset-m2">
      <div class="card">
        <div class="card-image">
          <img class="bg-image" src="images/overwatch_symbol.png" height="256" width="256" alt="Overwatch Logo">
        </div>
        <span class="card-title">Initiate Recall?</span>
        <div class="card-content">
          <div class="row">
<form class="col s12" method="post" action="">
  <div class="row">
    <div class="input-field col s12">
      <input id="first_name" name="first_name" type="text" class="validate" required="required">
      <label for="first_name">Name</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input id="email" name="email"  type="email" class="validate" required="required">
      <label for="email" data-error="Invalid">Email</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <textarea id="textarea1"  name="textarea1"  class="materialize-textarea" required="required"></textarea>
      <label for="textarea1">Message</label>
    </div>
  </div>
  <div class="row">
      <button class="btn waves-effect waves-light" type="submit" name="action">Yes
</button>
  </div>
</form>
 <!-- Modal Structure -->
<div id="modal1" class="modal">
<div class="modal-content">
<p>Thank you!<br>Your message has been sent successfully.<br>We will get back as soon as possible!</p>
</div>
<div class="modal-footer">
  <a href="recall.php" class=" modal-action modal-close waves-effect waves-green btn-flat">Okay</a>
</div>
</div>
</div>
        </div>
      </div>
    </div>
   </div> 
 <footer class="page-footer blue-grey darken-3">
    <div class="container container-foot">
      <div class="row">
        <div class="col s12 center">
          <p class="grey-text text-lighten-4">A class project by Jose Vallecer</p>
        </div>       
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container center">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
</body>
</html>