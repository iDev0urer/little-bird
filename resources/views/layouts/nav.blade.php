<nav class="navbar navbar-light bg-faded relative">
    <div class="container">
        <button class="navbar-toggler hidden-sm-up pull-right" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
            &#9776;
        </button>
        <a class="navbar-brand hidden-sm-down" href="#">Little Bird Sheet Music</a>
        <a class="navbar-brand hidden-md-up" href="#">LBSM</a>
        <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
            <ul class="nav navbar-nav pull-right">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item relative">
                    <a id="search-link" class="nav-link" href="#">Search</a>
                    <div id="search-block">
                        <form action="/search" method="POST">
                            <div class="input-group">
                                <input type="text" name="query" placeholder="Search query" class="form-control form-control-sm">
                                <a href="#" class="btn btn-primary input-group-addon"><i class="fa fa-search"></i></a>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
