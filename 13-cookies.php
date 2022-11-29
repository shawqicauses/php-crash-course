<?php

setcookie("user", "@shawqicauses", time() + 60 * 60 * 24); // SET COOKIE
if (isset($_COOKIE["user"])) {
  echo $_COOKIE["user"];
}

setcookie("user", "", time() - 60 * 60 * 24 * 30); // UNSET COOKIE
setcookie("new-user", "@new-user", time() + 60 * 60 * 24); // SET NEW COOKIE

?>