<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Testing</title>
</head>

<body>

<?php
    include_once('header.php');
  ?>    
    <div id="after">   
    <div id="content">
    </div>
          <aside>
               <h2 id="oldh2">SignIn</h2>
              <div id="membersign">
                  <form id="signin" action="process.php" method="post">
                      <input type="email" name="inemail" class="signinput" placeholder="email">
                      <input type="password" name="inpass" class="signinput" placeholder="password">
                      <input type="submit" name="submitin" value="login" class="submitbut">
                  </form>
              </div>
              <h2 id="newh2">SignUp</h2>
              <div id="newsign">
                  <form id="signup" action="process.php" method="post">
                      <input type="text" name="newfrstname" placeholder="व्firstname" class="newinput">
                      <input type="text" name="newlstname" placeholder="lastname" class="newinput">
                      <input type="email" name="newupemail" placeholder="email" class="newinput"> 
                      <input type="password" name="newuppass" placeholder"password" class="newinput">
                      <input type="password" name="newconfirmuppass" placeholder="confirm password" class="newinput">
                      <input type="submit" name="signupinfo" value="signup" class="submitbut">
                    </form>
              </div>
        </aside>
    </div>
        
    <?php
      include_once('footer.php');
    ?>
</body>
</html>