<?php
    require_once('template_header.php');
?>
            <nav class="menu">
                <ul>
                    <li><a href="index.php">ACCUEIL</a></li>
                    <li><a href="cv.php">CV</a></li>
                    <li><a id="currentpage" href="projets.php">PROJETS</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </nav>
        </header>
        <div class="content">
            <a class="project" href="https://github.com/AntoineLmbrt">
                <div class="project_item">
                    <h3>Project 1</h3>
                    <img class=project_image src="assets/logo_github.png">
                </div>
            </a>
            <a class="project" href="https://github.com/AntoineLmbrt">
                <div>
                    <h3>Project 2</h3>
                    <img class=project_image src="assets/logo_github.png">
                </div>
            </a>
            <a class="project" href="https://github.com/AntoineLmbrt">
                <div>
                    <h3>Project 3</h3>
                    <img class=project_image src="assets/logo_github.png">
                </div>
            </a>
            <a class="project" href="https://github.com/AntoineLmbrt">
                <div>
                    <h3>Project 4</h3>
                    <img class=project_image src="assets/logo_github.png">
                </div>
            </a>
            <a class="project" href="https://github.com/AntoineLmbrt">
                <div>
                    <h3>Project 5</h3>
                    <img class=project_image src="assets/logo_github.png">
                </div>
            </a>
        </div>
<?php
    require_once('template_footer.php');
?>