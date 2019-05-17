<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <?php  $config = app('EntityCommon')->getDataById('configweb', 1);  ?>
            <a href="/"><img id="logo" src="<?php echo e($config->logo); ?>" /></a>
            <?php echo app('ClassCategory')->htmlCategory(); ?>

        </div>
        <!--/.nav-collapse -->
    </div>
</nav>


<!--<ul class="nav navbar-nav navbar-right">
                <li><a href=""><div class="topnav">

                            <div class="search-container">
                                <form action="/action_page.php">
                                    <input type="text" placeholder="Search.." name="search">
                                    <button  type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div></a></li>
                <li><a href="">Static top</a></li>
                <li class="active"><a href="">Fixed top <span class="sr-only">(current)</span></a></li>
            </ul>-->