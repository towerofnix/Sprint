<!DOCTYPE html>
<html>
	<head>
		<title>Sprint - Editor</title>

		<?php include 'head.php'; ?>

		<link rel="stylesheet" href="/css/editor.css" type="text/css">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.1.9/ace.js"></script>
	</head>

	<body>
		<?php include 'navbar.php'; ?>

		<main>
			<div id="editor-toolbar">
				<span id="editor-file">File</span>
			</div>
			<div id="editor-left-pane">
				<div id="editor-go">Go</div>
				<div id="editor-stop">Stop</div>
				<div id="editor-fullscreen">Fullscreen</div>
				<div id="sprites-pane">
					<!-- All the sprites preview images are put here.
					You can click on one to open it up in the editor. -->
				</div>
			</div>
			<div id="editor-right-pane">
				<div id="editor-code"></div>
			</div>
			<script src="/js/editor.js"></script>
		</main>
	</body>
</html>
