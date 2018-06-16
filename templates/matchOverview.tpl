{extends "@layout.tpl"}
{block main}
    <div class="page-header"><h1>Zápasy x. kola</h1></div>
    {foreach from=$matches item="match"}
        <div class="border" style="border-bottom: solid; margin-bottom: 10px; padding-bottom: 10px">
            <div class="row border">
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-9">
                            <h2>{$match->homeTeam->name}</h2>
                        </div>
                        <div class="col-sm-offset-1 col-sm-2">
                            <h2>{$match->getHomeGoals()|default: "0"}</h2>
                        </div>
                    </div>
                    <div class="row">
                        {foreach from=$match->gethomeStrikers() item="striker" name="stikersHome"}
                            <div class="col-sm-4">
                                <span>{$striker.name} <b>{$striker.surname}</b> ({$striker.goals})</span>
                            </div>
                        {/foreach}
                    </div>
                    <div class="row" style="padding-top: 5%">
                        <div class="col-sm-4">
                            Nejlepší hráč hosté:
                        </div>
                        <div class="col-sm-4 col-sm-offset-4" style="color: blue">
                            <i>{$match->getHomeMVPName()}</i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">

                    <div style="padding: 0 auto; margin: 40% 40%; min-height: 20%">
                        <h3>VS</h3>
                        <div class="row">
                            <div class="text-center">{$match->date}</div>
                        </div>
                        <div class="row">
                            <div style="padding: 0 auto; margin: 40% 40%; min-height: 20%">
                                <h3>VS</h3>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-2">
                            <h2>{$match->getAwayGoals()|default: "0"}</h2>
                        </div>
                        <div class="col-sm-offset-1 col-sm-9">
                            <h2>{$match->awayTeam->name}</h2>
                        </div>
                    </div>
                    <div class="row">
                        {foreach from=$match->getawayStrikers() item="striker" name="stikersAway"}
                            <div class="col-sm-5">
                                <span>{$striker.name} <b>{$striker.surname}</b> ({$striker.goals})</span>
                            </div>
                        {/foreach}
                    </div>
                    <div class="row" style="padding-top: 5%">
                        <div class="col-sm-4">
                            Nejlepší hráč hosté:
                        </div>
                        <div class="col-sm-4 col-sm-offset-4" style="color: red">
                            <i>{$match->getAwayMVPName()}</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {/foreach}
{/block}