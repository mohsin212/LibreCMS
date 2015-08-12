<script>/*<![CDATA[*/
<?php session_start();
include'db.php';
if((!empty($_SERVER['HTTPS'])&&$_SERVER['HTTPS']!=='off')||$_SERVER['SERVER_PORT']==443)define('PROTOCOL','https://');else define('PROTOCOL','http://');
define('SESSIONID',session_id());
$config=$db->query("SELECT * FROM config WHERE id=1")->fetch(PDO::FETCH_ASSOC);
define('THEME','../layout/'.$config['theme']);
define('URL',PROTOCOL.$_SERVER['HTTP_HOST'].$settings['system']['url'].'/');
define('UNICODE','UTF-8');
$theme=parse_ini_file(THEME.'/theme.ini',true);
$act=filter_input(INPUT_POST,'act',FILTER_SANITIZE_STRING);
$ip=$_SERVER['REMOTE_ADDR'];
$si=session_id();
$error=0;
$ti=time();
$id=filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT);
$tbl=filter_input(INPUT_POST,'t',FILTER_SANITIZE_STRING);
$col=filter_input(INPUT_POST,'c',FILTER_SANITIZE_STRING);
$da=filter_input(INPUT_POST,'da',FILTER_SANITIZE_NUMBER_INT);
if($act=='quantity'){
	if($da==0){
		$q=$db->prepare("DELETE FROM cart WHERE id=:id");
		$q->execute(array(':id'=>$id));
		$cnt='';
	}else{
		$q=$db->prepare("UPDATE cart SET quantity=:quantity WHERE id=:id");
		$q->execute(array(':id'=>$id,':quantity'=>$da));
		$cnt='';
	}
	$q=$db->prepare("SELECT SUM(quantity) as quantity FROM cart WHERE si=:si");
	$q->execute(array(':si'=>$si));
	$r=$q->fetch(PDO::FETCH_ASSOC);
	$cnt=$r['quantity'];
	if($r['quantity']==0)$cnt='';?>
	window.top.document.getElementById("cart").innerHTML='<?php echo$cnt;?>';
<?php $total=0;
	$content='';
	$q=$db->prepare("SELECT * FROM cart WHERE si=:si ORDER BY ti DESC");
	$q->execute(array(':si'=>$si));
	if($q->rowCount()==0){?>
	window.top.document.getElementById("content").innerHTML='<?php echo$theme['settings']['cart_empty'];?>';
<?php }else{
	$total=0;
	$s=$db->prepare("SELECT * FROM cart WHERE si=:si ORDER BY ti DESC");
	$s->execute(array(':si'=>SESSIONID));
	$html=file_get_contents(THEME.'/cart.html');
	preg_match('/<loop>([\w\W]*?)<\/loop>/',$html,$matches);
	$cartloop=$matches[1];
	$cartitems='';
	if($s->rowCount()>0){
		while($ci=$s->fetch(PDO::FETCH_ASSOC)){
			$cartitem=$cartloop;
			$si=$db->prepare("SELECT id,code,title FROM content WHERE id=:id");
			$si->execute(array(':id'=>$ci['iid']));
			$i=$si->fetch(PDO::FETCH_ASSOC);
			$cartitem=str_replace('<print content="code">',$i['code'],$cartitem);
			$cartitem=str_replace('<print content="title">',$i['title'],$cartitem);
			$cartitem=str_replace('<print cart=id>',$ci['id'],$cartitem);
			$cartitem=str_replace('<print cart=quantity>',$ci['quantity'],$cartitem);
			$cartitem=str_replace('<print cart=cost>',$ci['cost'],$cartitem);
			$cartitem=str_replace('<print itemscalculate>',$ci['cost']*$ci['quantity'],$cartitem);
			$total=$total+($ci['cost']*$ci['quantity']);
			$cartitems.=$cartitem;
		}
		$total=$total+$ci['postagecost'];?>
	window.top.document.getElementById("total").innerHTML='<?php echo$total;?>';
	window.top.document.getElementById("orderitems").innerHTML='<?php echo preg_replace('/^\s+|\n|\r|\s+$/m', '', $cartitems);?>';
<?php }
	}
}?>
/*]]>*/</script>