{extends "@layout.tpl"}
{block content}
    <h1>Uprava týmu - {$team->name}</h1>
    <form method="post" action="/gadmin/teams/edit/{$team->id}">
        <div class="row">
            <div class="col-sm-6"><label for="name">Jméno:</label></div>
            <div class="col-sm-6"><input id="name" name="name" value="{$team->name}" type="text"></div>
        </div>
        <div class="row">
            <div class="col-sm-3"><label for="active-t">Aktivní:</label></div>
            <div class="col-sm-3"><input id="active-t" name="active" value="1" type="radio"
                                         {if $team->active == 1}checked{/if}></div>
            <div class="col-sm-3"><label for="active-f">Neaktivní:</label></div>
            <div class="col-sm-3"><input id="active-f" name="active" value="0" type="radio"
                                         {if $team->active == 0}checked{/if}></div>
        </div>
        <div class="row">
            <div class="col-sm-6"><label for="capitan">Kapitán</label></div>
            <div class="col-sm-6">
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
            <div class="col-lg-2"><span>Preferované hrací dny:</span></div>
            <div class="text-center">
                <div class="col-lg-2"><label for="playDays-po" style="margin-right: 0.5em">Pondělí</label><input
                            id="playDays-po"
                            name="playDays[1]" value="true"
                            type="checkbox"{if $team->isPlayDay(1)} checked {/if}>
                </div>
                <div class="col-lg-2"><label for="playDays-ut" style="margin-right: 0.5em">Úterý</label><input
                            id="playDays-ut" name="playDays[2]"
                            value="true"
                            type="checkbox"{if $team->isPlayDay(2)} checked {/if}>
                </div>
                <div class="col-lg-2"><label for="playDays-st" style="margin-right: 0.5em">Středa</label><input
                            id="playDays-st" name="playDays[3]"
                            value="true"
                            type="checkbox"{if $team->isPlayDay(3)} checked {/if}>
                </div>
                <div class="col-lg-2"><label for="playDays-ct" style="margin-right: 0.5em">Čtvtek</label><input
                            id="playDays-ct" name="playDays[4]"
                            value="true"
                            type="checkbox"{if $team->isPlayDay(4)} checked {/if}>
                </div>
                <div class="col-lg-2"><label for="playDays-pa" style="margin-right: 0.5em">Pátek</label><input
                            id="playDays-pa" name="playDays[5]"
                            value="true"
                            type="checkbox"{if $team->isPlayDay(5)} checked {/if}>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6"><label for="colour">Barva týmu</label></div>
            <div class="col-sm-6"><input type="color" id="colour" value="{$team->getTeamColour()}" name="colour"></div>
        </div>
        <div class="row">
            <div class="col-sm-2 col-sm-offset-5 text-center">
                <input type="submit" name="edit" value="Upravit tým">
            </div>
        </div>
    </form>
{/block}