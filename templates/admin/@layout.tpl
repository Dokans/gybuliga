<html>
<head>
    <title>{$page.title|default: "Menu | GyBu Liga"}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/typeahead.bundle.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    {block head}{/block}
</head>
<body>
<div class="container">
    {block menu}
        {include "menu.tpl"}
    {/block}
    {block content}
    {/block}
</div>
</body>
</html>