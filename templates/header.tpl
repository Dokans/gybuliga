{block style}
    <link rel="stylesheet" href="/css/header.css">
{/block}
{block scripts}

{/block}
{block header}
    <div class="navbar-more-overlay"></div>
    <nav class="navbar navbar-inverse navbar-fixed-top animate">
        <div class="container navbar-more visible-xs">

        </div>
        <div class="container">
            <div class="navbar-header hidden-xs">

                <a class="navbar-brand" href="/">GyBu Liga</a>
            </div>

            <ul class="nav navbar-nav navbar-right mobile-bar">
                <li>
                    <a href="/">
                        <span class="menu-icon fa fa-home"></span>
                        Domů
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdownBtn">
                        <span class="menu-icon fa fa-th-list"></span>
                        <span class="hidden-xs">Skupiny</span>
                    </a>
                    <span class="visible-xs">Skupiny</span>
                    <div id="dropDown" class="dropdown-content">
                        {foreach from=$groups item="group"}
                            <a href="/groups/{$group.url}">{$group.name}</a>
                        {/foreach}
                    </div>
                </li>
                {if count($rounds) > 1}
                    <li class="dropdown">
                        <a class="dropdownBtn">
                            <span class="menu-icon fa fa-th-list"></span>
                            <span class="hidden-xs">Zápasy</span>
                    </a>
                        <span class="visible-xs">Zápasy</span>
                        <div id="dropDown" class="dropdown-content">
                            {foreach from=$rounds item="round"}
                                <a href="/matches/{$round.id}">{$round.number}. kolo</a>
                            {/foreach}
                        </div>
                </li>
                {else}
                    <li>
                    </li>
                {/if}

                <li>
                    <a href="/teams">
                        <span class="menu-icon fa fa-square-o"></span>
                        Týmy
                    </a>
                </li>
                <li>
                    <a href="/statistic/topStrikers">
                        <span class="menu-icon fa fa fa-table"></span>
                        Top střelci
                    </a>
                </li>
                <li class="">
                    <a href="/archive">
                        <span class="menu-icon fa fa-archive hidden-xs hidden-sm"></span>
                        <span class="hidden-xs hidden-sm">Minulé sezóny</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
{/block}
