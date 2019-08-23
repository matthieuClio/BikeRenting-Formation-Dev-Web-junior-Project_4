<base href="/projet_4/">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Jean Forteroche</title>
<meta name="description" content="Le livre Billet simple pour l'Alaska est disponible en lecture gratuite sur ce site.">
<link rel="icon" type="image/jpg" href="public/images/icone/book.jpg">
<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
<link rel="stylesheet" href="public/css/style.css">
<?php 
	$desable = true;
	if (!empty($_SESSION['pseudo_user']) && $desable != true) {
		?>
			<script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
			<script>tinymce.init({selector:'textarea'});</script>
		<?php
	}
?>