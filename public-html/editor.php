<!DOCTYPE html>
<html>
	<head>
		<title>Sprint - Editor</title>
		
		<?php include 'head.php'; ?>
		
		<link rel="stylesheet" href="/css/editor.css" type="text/css">
		<script src="/js/ace.js"></script>
	</head>
	
	<body>
		<?php include 'navbar.php'; ?>
		
		<main>
			<div id="editor-left-pane"></div>
			<div id="editor-right-pane">
				<div id="editor-code"></div>
			</div>
			
			<script src="/js/editor.js"></script>
		</main>
	</body>
</html>
