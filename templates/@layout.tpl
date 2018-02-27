<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{$page.title|default: "GyBu Liga"}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/jquery-3.2.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {include "favicon.tpl"}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    {block scripts}
    {/block}
    {block styles}
    {/block}
</head>
<body>
<div class="container">
    {block header}
        {include "header.tpl"}
    {/block}
    <div style="min-height: 500px">
        {block main}
        {/block}
    </div>
    {block footer}
        {include "footer.tpl"}
    {/block}
</div>
</body>
</html>