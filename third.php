<?php
  session_start();
  if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
  } else {
    $_SESSION['count']++;
  }
  // $_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count']: 0;
  echo $_SESSION['count'];
  //session_register();
  if ($_SESSION['count'] % 3 === 0 and $_SESSION['count'] !== 0) {
      //setcookie('cookie[count]', $_SESSION['count']);
//      setcookie('cookie[one]','cookie_one');
//      setcookie('cookie[two]','cookie_two');
//      setcookie('cookie[three]','cookie_three');
      header("Location: fourth.php");
  }

  echo "This is third";
?>

</br>
<a href="index.php">index</a>
