// Needle in the Haystack;
<br>
<?php
  if (strpos($_SERVER["HTTP_USER_AGENT"], "MSIE") !== false) {
    echo "You're using Internet Explorer.";
  } else {
    echo "You're not using Internet Explorer.";
  }
?>

