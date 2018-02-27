{extends "@layout.tpl"}
{block main}
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            {foreach from=$test item="team" name="test"}
                <li data-target="#myCarousel" data-slide-to="0" {if $smarty.foreach.test.first}class="active"{/if}></li>
            {/foreach}
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            {foreach from=$test item="team" name="test"}
                <div class="item {if $smarty.foreach.test.first}active{/if}">
                    <a href="/teams/{$team.url}">
                        <img src="/image/teams/{$team.teamID}.jpg" alt="{$team.name}" style="width: 300px; height: 300px">
                    </a>
                </div>
            {/foreach}
            <!-- Left and right co  ntrols -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="fa glyphicon-chevron-left fa-backward"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="fa glyphicon-chevron-right fa-forward"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <style>
        .carousel-inner > .item > a > img {
            margin: 0 auto;
    </style>
{/block}
