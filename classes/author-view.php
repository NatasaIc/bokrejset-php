<?php

class AuthorView {
    public function renderAllAuthorsAsLinks(array $authors) {
        foreach ($authors as $author) {
            echo "<a href='?author-id={$author->getId()}'>";
            echo "<div>{$author->getFirstName()} {$author->getLastName()}</div>";
            echo "</a>";
        }
    }

      public function renderSingleAuthor(array $author):void {

        echo "<h2>{$author[0]->getFirstName()}</h2>";
        echo "<h3>{$author[0]->getLastName()}</h3>";
    }
}
