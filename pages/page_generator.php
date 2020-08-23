<?php
require "bootstrap.php";

$pages = $entityManager->getRepository('Pages')->findAll();


function pageLinks($pages)
{
    foreach ($pages as $values) {
        $page_name = $values->getName();
        $page_id = $values->getId();
        $page_content = $values->getContent();
        echo
            "<a href=\"index.php?pageId=$page_id&pageName=$page_name&pageContent=$page_content\">$page_name</a><br>";
    }
}


function generatePage()
{
    global $pages;

    if (isset($_GET["pageId"])) {
        $page_name = $_GET["pageName"];
        $page_content = $_GET["pageContent"];

        echo
            '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>CMS ' . $page_name . '</title>
            </head>
            <body>
                <a href="login.php">Login</a>
                <br>' . pageLinks($pages) . '
                <h1>' . $page_name . '</h1>
                <h3>' . $page_content . '</h3>
            </body>
            </html>';
    } else {

        $min_page_id = min($pages)->getId();

        foreach ($pages as $key) {
            if ($key->getId() === $min_page_id) {
                echo
                    '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>CMS' . $key->getName() . '</title>
                </head>
                <body>
                    ' . pageLinks($pages) . '
                    <h1>' . $key->getName() . '</h1>
                    <h3>' . $key->getContent() . '</h3>
                </body>
                </html>';
            }
        }
    }
}
