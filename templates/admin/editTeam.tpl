{extends "@layout.tpl"}
{block content}
    <h1>Uprava týmu - {$team->name}</h1>
    <form method="post" action="/gadmin/teams/edit/{$team->id}">
        <div class="row">
            <div class="col-lg-6"><label for="name">Jméno:</label></div>
            <div class="col-lg-6"><input id="name" name="name" value="{$team->name}" type="text"></div>
        </div>
        <div class="row">
            <div class="col-lg-3"><label for="active-t">Aktivní:</label></div>
            <div class="col-lg-3"><input id="active-t" name="active" value="1" type="radio" {if $team->active == 1}checked{/if}></div>
            <div class="col-lg-3"><label for="active-f">Neaktivní:</label></div>
            <div class="col-lg-3"><input id="active-f" name="active" value="0" type="radio" {if $team->active == 0}checked{/if}></div>
        </div>
        <div class="row">
            <div class="col-lg-6"><label for="capitan">Kapitán</label></div>
            <div class="col-lg-6">
                <select id="capitan" name="capitan">
                    {foreach from=$team->getRoster() item="player"}
                        <option value="{$player->id}"
                                {if $player->id == $team->capitan}selected {$capitan = 1}{/if}>{$player->name} {$player->surname}</option>
                    {/foreach}
                    {if !isset($capitan)}
                        <option selected value="">----</option>
                    {/if}
                </select>
            </div>
        </div>
        <div class="row text-center">
            <label for="description" style="font-size: larger; margin-top: 10px">Popis</label>
        </div>
        <div class="row" style="margin-top: 10px">
            <textarea name="description" id="description">
                {$team->getTeamDescription()}
            </textarea>
        </div>
        <!-- Include external JS libs. -->
        <script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>
        <script>
            tinymce.init({
                selector: '#description'
            });
        </script>
        <div class="row" style="margin-top: 30px">

        </div>

        <div class="row">
            <div class="col-sm12 text-center">
                <input type="submit" name="edit" value="Upravit tým">
            </div>
        </div>
    </form>
{/block}