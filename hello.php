<? 
@session_start(); 
$_SESSION['editor_refresh_count']; 
isset($PHPSESSID)? session_id($PHPSESSID): $PHPSESSID = session_id(); 
$_SESSION['editor_refresh_count']++;
setcookie('PHPSESSID', $PHPSESSID, time()+3156000);
echo $_SESSION['editor_refresh_count'];
?>
