{extends "@layout.tpl"}
{block scripts}

{/block}
{block main}
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-2">{$description.title}</h1>
            <p class="lead">{$description.content}</p>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th></th>
            <th>Jméno</th>
            <th>Kapitán</th>
            <th>Kontakt</th>
        </tr>
        </thead>
        <tbody>
        {foreach from=$teams  item="team" name="teams"}
            <tr onclick="window.document.location='{$team.urlLink}';">
                <th><img src="{$team.logo}" class="img-thumbnail" style="width: 60px">
                </th>
                <td>{$team.name}</td>
                <td>{$team.capitan->surname|default:"------"}</td>
                <td>{$team.capitan->contact}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
    <script src="js/jquery-3.2.1.min.js"></script>
{/block}