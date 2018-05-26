<html>
<head>
<meta name=viewport content='width=200'>
</head>
<body>
<h1>Damianberry</h1>

<?PHP
  $cmd="gpio -g mode 19 out";
  shell_exec($cmd);
  $cmd="gpio -g write 19 1";
  shell_exec($cmd);
  $cmd="gpio -g mode 26 out";
  shell_exec($cmd);
  $cmd="gpio -g write 26 1";
  shell_exec($cmd);



$adr=explode(".",$_SERVER['REMOTE_ADDR']);
 $p=0;
if(md5($_POST['haslo'])=="098f6bcd4621d373cade4e832627b4f6")
 $p=1;
if((($adr[0]==192)&&($adr[1]==168)&&($adr[2]==0))||($p==1))
{
printf(" <form name='klikanie' method='post' action='index1.php'>");
printf(" <input type='submit' value='otworz' name='otworz' style='width:120; height:30'><br>");
printf(" <input type='submit' value='zamknij' name='zamknij' style='width:120; height:30'>");

printf("</form>");
printf(" <form name='klikanie' method='post' action='index.php'>");
printf(" <input type='submit' value='stop' name='stop' style='width:120; height:30'>");
printf("</form>");


if($_POST['zamknij']=='zamknij')
 {
  printf("zamknij <br>");
  $cmd="gpio -g write 19 0";
  shell_exec($cmd);
  sleep(16);
  $cmd="gpio -g write 19 1";
  shell_exec($cmd);
}

if($_POST['otworz']=='otworz')
 {
  printf("otworz <br>");
  $cmd="gpio -g write 26 0";
  shell_exec($cmd);
  sleep(16);
  $cmd="gpio -g write 26 1";
  shell_exec($cmd);

 }
if($_POST['stop']=='stop')
 {
  printf("stop <br>");
  $cmd="gpio -g write 26 1";
  shell_exec($cmd);
  $cmd="gpio -g write 19 1";
  shell_exec($cmd);
}
}
else
{
printf('<form method="POST" action="index.php"><input type="password" name="haslo"><br><input type="submit" value="go"></form>');
}
?>

<?PHP

#if($k==0)
# {
#  printf("<br> nie wiem");
# }
#  else
#  if($k==1)
#  {
#  printf("<br> ostatnio zamykano");
#  }
#  else
#  {
#  printf("<br> ostatnio otwierano");
#  }
?>


<br>
<table>
</table>
</body></html>

