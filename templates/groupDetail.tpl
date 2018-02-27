{extends "@layout.tpl"}
{block main}
    <table class="table">
        <thead>
        <tr>
            <th>Tým</th>
            <th>Body</th>
            <th>Zápasy</th>
            <th>GF</th>
            <th>GA</th>
            <th>W</th>
            <th>WO</th>
            <th>LO</th>
            <th>L</th>
        </tr>
        </thead>
        <tbody>
        {foreach from=$table item="team" name="groups"}
            <tr>
                <td>
                    {$team.name}
                </td>
                <td>
                    {$team.table.points}
                </td>
                <td>
                    {$team.table.matches}
                </td>
                <td>
                    {$team.table.GF}
                </td>
                <td>
                    {$team.table.GA}
                </td>
                <td>
                    {$team.table.matchBalance.wins}
                </td>
                <td>
                    {$team.table.matchBalance.OW}
                </td>
                <td>
                    {$team.table.matchBalance.OL}
                </td>
                <td>
                    {$team.table.matchBalance.loses}
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-sm-offset-3">
                GF
            </div>
            <div class="col-sm-3">
                Vstřelené góly
            </div>
        </div>
    </div>
{/block}