{extends "@layout.tpl"}
{block content}
    <div class="card-header text-center">
        <h1>Zápas: {$homeTeam.name} {$match->getHomeGoals()|default: "0"} vs {$match->getAwayGoals()} {$awayTeam.name}</h1>
    </div>
    <div class="row">
        {if isset($success)}
            <div class="text-center" style="background-color: #26c738">
                {$success}
            </div>
        {elseif isset($error)}
            <div class="text-center" style="background-color: red">
                {$error}
            </div>
        {/if}
    </div>
    <div class="row">
        <form method="post" action="/gadmin/matches/edit/{$matchID}">
            <div class="col-md-2"></div>
            <div class="col-md-2">Změnit výsledek</div>
            <input type="hidden" value="{$matchID}" name="matchID">
            <div class="col-md-4">
                <select name="result" title="Výsledek">
                    <option value="1" {if $result == 1}selected{/if}>Výhra domácích</option>
                    <option value="3" {if $result == 3}selected{/if}>Výhra hostů</option>
                    <option value="2" {if $result == 2}selected{/if}>Výhra domácích v prodloužení</option>
                    <option value="4" {if $result == 4}selected{/if}>Výhra hostů v prodloužení</option>
                    <option value="0" {if $result == 0}selected{/if}>Neodehráno</option>
                    <option value="5" {if $result == 5}selected{/if}>Kontumace</option>
                </select>
            </div>
            <div class="col-md-2">
                <input type="submit" value="Změnit">
            </div>
            <div class="col-md-2"></div>
        </form>

    </div>
    <form method="post" action="/gadmin/matches/edit/{$matchID}">
        <input type="hidden" value="{$matchID}" name="matchID">
        <div class="row" style="padding-top: 10px; margin-top: 10px; border-top: solid black 0.5px">
            <div class="col-lg-3 col-md-6 text-center">
                <label for="mvpHome">Nejlepší hráč domácích</label>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <select id="mvpHome" name="mvpHome" required>
                    {foreach from=$homeTeam.players item="player"}
                        <option value="{$player->id}" {if $player->id == $match->HomeMVP}selected{/if}>{$player->name} {$player->surname}</option>
                    {/foreach}
                    {if $match->HomeMVP == ""}
                        <option selected value="">-------</option>
                    {/if}
                </select>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <label for="mvpAway">Nejlepší hráč hosté</label>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <select id="mvpHome" name="mvpAway" required>
                    {foreach from=$awayTeam.players item="player"}
                        <option value="{$player->id}" {if $player->id == $match->AwayMVP}selected{/if}>{$player->name} {$player->surname}</option>
                    {/foreach}
                    {if $match->AwayMVP == ""}
                        <option selected value="">-------</option>
                    {/if}
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <input type="submit" value="Uložit MVP">
            </div>
        </div>
    </form>
    <div class="row" style="padding-top: 10px; margin-top: 10px; border-top: solid black 0.5px">
        <div class="col-lg-6">
            <h2 class="text-center">Domácí - {$homeTeam.name}</h2>
            {foreach from=$homeTeam.strikers item="striker"}
                <div class="row">
                    <form action="/gadmin/matches/edit/{$matchID}" method="post">
                        <div class="col-lg-4">
                            <input type="hidden" name="goalID" value="{$striker.goalID}">
                            <input type="hidden" name="playerID" value="{$striker.playerID}">
                            <input type="hidden" name="matchID" value="{$striker.matchID}">
                            {$striker.name} <b>{$striker.surname}</b>
                        </div>
                        <div class="col-lg-4">
                            <input type="number" value="{$striker.goals}" name="goals" title="goals">
                        </div>
                        <div class="col-lg-2">
                            <input type="submit" value="Změnit">
                        </div>
                        <div class="col-lg-2">
                                <span class="icon-close">
                                    Smazat
                                </span>
                        </div>
                    </form>
                </div>
            {/foreach}
            <div class="row" style="padding-top: 10px; margin-top: 10px; border-top: solid black 0.5px">
                <div class="col-lg-12 border-dark"></div>
            </div>
            <form action="/gadmin/matches/edit/{$matchID}" method="post">
                <div class="row">
                    <div class="col-lg-4">
                        <input type="hidden" name="teamID" value="{$homeTeam.id}">
                        <input type="hidden" name="matchID" value="{$matchID}">
                        <select name="playerID" title="Hráč">
                            {foreach from=$homeTeam.players item="player"}
                                <option value="{$player->id}">{$player->name} {$player->surname}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <input type="number" name="goals" title="goals" value="1">
                    </div>
                    <div class="col-lg-4">
                        <input type="submit" value="Přidat">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <h2 class="text-center">Hosté - {$awayTeam.name}</h2>
            {foreach from=$awayTeam.strikers item="striker"}
                <div class="row" >
                    <form action="/gadmin/matches/edit/{$matchID}" method="post">
                        <div class="col-lg-4">
                            <input type="hidden" name="goalID" value="{$striker.goalID}">
                            <input type="hidden" name="playerID" value="{$striker.playerID}">
                            <input type="hidden" name="matchID" value="{$striker.matchID}">
                            {$striker.name} <b>{$striker.surname}</b>
                        </div>
                        <div class="col-lg-4">
                            <input type="number" value="{$striker.goals}" name="goals" title="goals">
                        </div>
                        <div class="col-lg-2">
                            <input type="submit" value="Změnit">
                        </div>
                        <div class="col-lg-2">
                                <span class="icon-close">
                                    Smazat
                                </span>
                        </div>
                    </form>
                </div>
            {/foreach}
            <div class="row" style="padding-top: 10px; margin-top: 10px; border-top: solid black 0.5px">
                <div class="col-lg-12"></div>
            </div>
            <form action="/gadmin/matches/edit/{$matchID}" method="post">
                <div class="row">
                    <div class="col-lg-4">
                        <input type="hidden" name="teamID" value="{$awayTeam.id}">
                        <input type="hidden" name="matchID" value="{$matchID}">
                        <select name="playerID" title="Hráč">
                            {foreach from=$awayTeam.players item="player"}
                                <option value="{$player->id}">{$player->name} {$player->surname}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <input type="number" name="goals" title="goals" value="1">
                    </div>
                    <div class="col-lg-4">
                        <input type="submit" value="Přidat">
                    </div>
                </div>
            </form>
        </div>
    </div>
{/block}