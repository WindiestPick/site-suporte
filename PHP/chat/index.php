<?php
session_start();

$id = $_SESSION['userID'];
$idcha = $_GET["idcha"];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat-Simples</title>
	<link rel="stylesheet" href="../../assets/css/main.css" />

	<script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
						document.getElementById('chat').innerHTML = req.responseText;
				}
			}
			req.open('GET', 'chat.php?userID=<?php echo $id;?>&ticketID=<?php echo $idcha;?>', true);
			req.send();
		}
	
		setInterval(function(){ajax();}, 1000);

 
	</script>
</head>
<body onload="ajax();">

	<div id="chat">
	</div>
	<div id="mensagem">
		<form method="GET" action="index.php">
			<div class="row gtr-50 gtr-uniform">
				<div class="col-6 col-12-mobilep">
					<textarea name="mensagem" rows="1" placeholder="mensagem"></textarea>
				</div>
				<div class="col-6 col-12-mobilep">
					<input type="submit" value="Enviar"/>
				</div>
				<input type="hidden" name="idcha" value="<?php echo $idcha;?>"/>
			</div>
		</form>
	</div>
	<?php
		include("bd_conect.php");
		$sql = $pdo->query("SELECT * FROM chat WHERE ticketID =".$idcha);
		foreach ($sql->fetchAll() as $key2){
			$mensagem = $_GET['mensagem'];
			if($mensagem == "null"){
				echo '';
			}else{
				$chatID = $key2["ID"];
				$sql = $pdo->query("INSERT INTO mensagens SET chatID = $chatID, userID = $id, msg = '$mensagem'");
			}
			
		}
	?>
</body>
</html>