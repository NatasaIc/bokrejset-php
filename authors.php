<?php

require 'classes/author-view.php';
require 'classes/author-model.php';
require 'classes/author.php';

$pdo = require 'partials/connect.php';
$authorModel = new AuthorModel($pdo);
$authorView = new AuthorView();

// ==============================================

include 'partials/header.php';
include 'partials/nav.php';

$authorView->renderAllAuthorsAsLinks($authorModel->getAllAuthors());


include 'partials/footer.php';