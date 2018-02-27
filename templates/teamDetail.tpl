{extends "@layout.tpl"}
{block main}
    <div class="container">
        <div class="row center-block">
            <div class="col-lg-4" style="padding: 10px auto">
                <img src="{$teamLogo}" class="img-responsive" style="width: 300px; padding: 0 auto">
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="page-header">
                        <h1>{$teamName}</h1>
                    </div>
                    <div class="col-lg-12">
                        {$teamText}
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-striped">
            <thead class=>
            <tr>
                <th>#</th><th>Jméno</th><th>Počet gólů</th><th>Kontakt</th>
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
{/block}