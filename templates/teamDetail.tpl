{extends "@layout.tpl"}
{block main}
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="{$teamLogo}" class="img-responsive" style="width: 300px; padding: 0 auto">
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12 page-header">
                        <h1>{$teamName}</h1>
                    </div>
                    <div class="col-lg-12">
                        {$teamText}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-9">
                <table class="table table-striped">
                    <thead class=>
                    <tr>
                        <th>#</th>
                        <th>Jméno</th>
                        <th>Počet gólů</th>
                        <th>Kontakt</th>
                    </tr>
                    </thead>
                    {foreach from=$roster item="player" name="roster"}
                        <tr>
                            <td class="col-md-2">{$player->number}</td>
                            <td class="col-lg-4">{$player->getName()}</td>
                            <td class="col-lg-3">{$player->getGoalsForCurrentTeam()}</td>
                            <td class="col-lg-3">{$player->contact|default:"----"}</td>
                        </tr>
                    {/foreach}
                </table>
            </div>
            <div class="col-sm-3 page-item">
                <div class="row">
                    <div class="col-sm-5">
                        Hrací dny
                    </div>
                    <div class="col-sm-7">
                        {foreach from=$playDays item="day" name="playDays"}
                            {if $smarty.foreach.playDays.last}
                                <b>{$day}</b>
                            {else}
                                <b>{$day}</b>
                                ,
                            {/if}
                        {/foreach}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        Barva dresů:
                    </div>
                    <div class="col-sm-7">
                        <div style="background-color: {$colour}; width: 20px; height: 20px;  border: 1px solid rgba(0, 0, 0, .2);"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-offset-3">
                Poslední 3 zápasy
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-offset-3">
                <table class="table-hover">
                    <thead>
                    <tr>
                        <th>
                            Proti komu
                        </th>
                        <th>
                            Výsledek
                        </th>
                        <th>MVP</th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach from=$lastMatches item="lastMatch"}
                        <tr style="background-color: {$lastMatch.resultColour}">
                            <td>
                                {$lastMatch.oponent}
                            </td>
                            <td>
                                {$lastMatch.score}
                            </td>
                            <td>
                                {$lastMatch.MVP}
                            </td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{/block}