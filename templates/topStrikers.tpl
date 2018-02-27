{extends "@layout.tpl"}
{block main}
    {$count = 1}
    <table class="table">
        <thead>
        <tr>
            <th></th>
            <th>Jméno</th>
            <th>Tým</th>
            <th>Počet gólů</th>
        </tr>
        </thead>
        <tbody>
        {foreach from=$strikers item="striker"}
            <tr>
                <td>
                    {if $count == 1}
                        <span style="color: gold"><b>1</b></span>
                    {elseif $count == 2}
                        <span style="color: silver"><b>2</b></span>
                    {elseif $count == 3}
                        <span style="color: saddlebrown"><b>3</b></span>
                    {else}
                        <span style="color:">{$count}</span>
                    {/if}

                </td>
                <td>
                    {$striker.player->name} <b>{$striker.player->surname}</b>
                </td>
                <td>
                    {$striker.player->currentTeam->name}
                </td>
                <td>
                    {$striker.goals}
                </td>
            </tr>
            {$count = $count + 1}
        {/foreach}
        </tbody>
    </table>

{/block}