{extends "@layout.tpl"}
{block main}
    <table>
        <thead>
        <tr>
            <th>Jméno</th>
            <th>Počet účastníku</th>
        </tr>
        </thead>
        <tbody>
        {foreach from=$groups item="group"}
            <tr>
                <td><a href="/groups/{$group.url}">{$group.name}</a></td>
                <td> ###</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
{/block}