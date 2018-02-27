{extends "@layout.tpl"}
{block content}
    <h1>Uprava hráče - {$player->name} <b>{$player->surname}</b></h1>
    <form method="post" action="/gadmin/players/edit/{$player->id}">
        <input type="hidden" value="{$player->id}" name="playerId">
        <div class="row">
            <div class="col-lg-6"><label for="name">Jméno:</label></div>
            <div class="col-lg-6"><input id="name" name="name" value="{$player->name}" type="text"></div>
        </div>
        <div class="row">
            <div class="col-lg-6"><label for="surname">Příjmení</label></div>
            <div class="col-lg-6"><input type="text" id="surname" name="surname" value="{$player->surname}"></div>
        </div>
        <div class="row">
            <div class="col-lg-6"><label for="team">Tým</label></div>
            <div class="col-lg-6">
                <select id="team" name="team">
                    {foreach from=$teams item="team"}
                        <option value="{$team.id}" {if $player->currentTeam->id == $team.id}selected{/if}>{$team.name}</option>
                    {/foreach}
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6"><label for="class">Třída</label></div>
            <div class="col-lg-6"><input id="class" name="class" value="{$player->class}" type="text"></div>
        </div>
        <div class="row">
            <div class="col-lg-6"><label for="contact">Kontakt</label></div>
            <div class="col-lg-6"><input id="contact" name="contact" value="{$player->contact}" type="text"></div>
        </div>
        <div class="row">
            <div class="col-lg-6"><label for="number">Číslo</label></div>
            <div class="col-lg-6"><input id="number" name="number" value="{$player->number}" type="number"></div>
        </div>
        <div class="row">
            <div class="col-sm12 text-center">
                <input type="submit" name="edit" value="Upravit hráče">
            </div>
        </div>
    </form>
{/block}