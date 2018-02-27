{extends "@layout.tpl"}
{block head}
    <script src="/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script>
        $(function () {
            $("#tabs").tabs();
        });
    </script>
{/block}
{block content}
    <form action="/gadmin/matches" method="post">
        <input type="hidden" value="{if isset($selectedSeason)}{$selectedSeason}{else}{$mainSeason.id}{/if}"
        <label id="season">Vyber sezónu</label><select name="season" id="season" onchange="this.form.submit()">
            {foreach from=$seasons item="season"}
                <option value="{$season.id}" {if isset($selectedSeason)}{if $season.id == $selectedSeason}selected{/if}{else}{if $season.id == $mainSeason.id}selected{/if}{/if}>{$season.name}</option>
            {/foreach}
        </select>
        <input type="submit" class="hidden">
    </form>
    <div id="tabs">
        <ul>
            {foreach from=$rounds item="round"}
                <li><a href="#{$round.roundID}"> {$round.from} - {$round.to}</a></li>
            {/foreach}
        </ul>
        {foreach from=$rounds item="round"}
            <div id="{$round.roundID}">
                <table class="table-bordered">
                    <thead>
                    <tr>
                        <th>Domácí</th>
                        <th colspan="3"></th>
                        <th>Hosté</th>
                        <th>Výsledek</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach from=$round.matches item="match"}
                        <tr>
                            <td>{$match->homeTeam->name}</td>
                            <td>{$match->getHomeGoals()|default: "0"}</td>
                            <td>-</td>
                            <td>{$match->getAwayGoals()|default: "0"}</td>
                            <td>{$match->awayTeam->name}</td>
                            <td><a href="/gadmin/matches/edit/{$match->matchID}">Editovat</a></td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>
        {/foreach}
    </div>
{/block}