{extends "@layout.tpl"}
{block content}
    {foreach from=$teams item="team"}
        <div class="row">
            <div class="col-md-2">
                <img src="{$team->getTeamLogoPath()}" class="img-thumbnail" style="max-width: 50px">
            </div>
            <div class="col-md-3">
                <b>{$team->name}</b>
            </div>
            <div class="offset-5 col-md-2">
                <a href="/gadmin/teams/edit/{$team->id}">Editovat</a>
            </div>
        </div>

    {/foreach}
{/block}