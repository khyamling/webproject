<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#journals" ).autocomplete({
      source: 'search.php', minLength: 4
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  </script>
</head>
<body>
 
<div class="ui-widget">
  <label for="journals">Journal name: </label>
  <input id="journals">
</div>
</body>
</html>




