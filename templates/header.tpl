{block style}
    <link rel="stylesheet" href="/css/header.css">
{/block}
{block scripts}
    <script src="/js/header.js"></script>
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
                <li>
                    <a href="/groups">
                        <span class="menu-icon fa fa-th-list"></span>
                        <span class="hidden-xs">Skupiny</span>
                        <span class="visible-xs">Skupiny</span>
                    </a>
                </li>
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
                <li>
                    <a href="/archive">
                        <span class="menu-icon fa fa-archive"></span>
                        <span class="hidden-xs">Minulé sezóny</span>
                        <span class="visible-xs">Archiv</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
{/block}
