{extends "@layout.tpl"}
{block content}
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            <h1>Sezony</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <a href="/gadmin/season/add">Přidat sezonu</a>
        </div>
    </div>
    {foreach from=$seasons item="season"}
        <div class="row">
            <div class="col-md-2">
                {$season->name}
            </div>
            <div class="col-md-1">
                {$season->from|date_format: "%d/%m/%Y"}
            </div>
            <div class="col-md-1">
                {$season->to|date_format: "%d/%m/%Y"}
            </div>
            <div class="col-md-2 col-md-offset-6">
                <a href="/gadmin/season/edit/{$season->id}">Edit</a>
            </div>
        </div>
    {/foreach}
{/block}