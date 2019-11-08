<div id="navbar">
    <div class="col">
        <img id="logo" src="./image/logo.png" alt="">
    </div>
    <div id="col">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" menu collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">About</a>
                    <a class="nav-item nav-link" href="#">News</a>
                    <a class="nav-item nav-link" href="#">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="form">
    <form id="input-form" action="./index.php" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" id="input-description" name="search-data" placeholder="Filter by title, benefits, companies, expertise">
        </div>
        <div id="form-checkbox" class="form-group form-check">
            <select class="form-control" id="exampleFormControlSelect1" name="type">
                <option>Full time</option>
                <option>Part time</option>
            </select>
        </div>
        <div id="find-button" class="form-group"><input type="submit" class="button btn btn-primary" name="find" value="Find" /></div>
    </form>
</div>