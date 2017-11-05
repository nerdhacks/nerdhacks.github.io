<?php
  $lnk = mysqli_connect('localhost', 'nerdhack_tmp', 'tmp10!', 'nerdhack_site');
  $lnk->query("INSERT INTO site (created, address) VALUES(UNIX_TIMESTAMP(), '". $_SERVER['REMOTE_ADDR'] ."')");

  $total = $lnk->query("SELECT address FROM site");
  $unique = $lnk->query("SELECT DISTINCT address FROM site");
?>

<html>
  <head>
    <title>nerdhacks - coming soon</title>
  </head>
  <body leftmargin="0" topmargin="0" style="margin:0;">
    <center style="font-family: Calibri, Verdana; font-size: 10pt;">
      <img src="nerdhacks.png" /><br />
      <h1>coming soon</h1>

      In the meantime, please visit our IRC Network, irc.nerdhacks.net and join #help for basic support, #Aeon for chat :)

      <iframe src="https://kiwiirc.com/client?settings=3e2cc453387f2941a6f7cd85103969f8" style="border:0; width:100%; height:500px;"></iframe>

      (<?php echo mysqli_num_rows($unique).'U:'.mysqli_num_rows($total).'T'; ?>)
    </center>
  </BODY>
</HTML>
