{extends "@layout.tpl"}
{block head}

{/block}
{block content}
    <h1>Hráči</h1>
    <a href="/gadmin/players/add">Přidat hráče</a>

    <table class="table-bordered">
        <thead class="table-hover">
        <tr>
            <th>Hráč</th>
            <th>Tým</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        {foreach from=$players item="player"}
            <tr>
                <td>{$player->name} {$player->surname}</td>
                <td>{$player->currentTeam->name}</td>
                <td><a href="/gadmin/players/edit/{$player->id}">Edit</a></td>
            </tr>
        {/foreach}
        </tbody>
    </table>
{/block}