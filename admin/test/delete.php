<?php
require_once '../../config/database.php';

deleteArticle("articles", $_GET['id']);
redirect("list.php");
