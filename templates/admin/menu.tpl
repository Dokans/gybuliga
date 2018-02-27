{extends "@layout.tpl"}
{block menu}
    <menu>
        <ul>
            <li><a href="/gadmin/">Hlavní stránka</a></li>
            {foreach from=$menuItems item="menuItem" name="menu"}
                <li><a href="/gadmin/{$menuItem.link}">{$menuItem.name}</a></li>
            {/foreach}
            <li><a href="/gadmin/user/logout">Odhlášení</a></li>
        </ul>
    </menu>
{/block}