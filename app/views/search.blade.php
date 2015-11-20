<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Search Names</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#names" ).autocomplete({
      source: 'usernames'
    });
  });
  </script>
</head>
<body>
 
<div>
  <label for="names">Names: </label>
  <input id="names">
</div>
 
 
</body>
</html>