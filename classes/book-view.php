<?php

class BookView {

    public function renderAllBooksAsLinks(array $books): void {
        echo "<ul>";
        foreach ($books as $book) {
            echo "<a href='?book-id={$book->getId()}'>";
            echo "<div>{$book->getTitle()} ({$book->getYear()})</div>";
            echo "</a>";
            echo "</ul>";
    }
    }
    public function renderSingleBook (array $book):void {

        echo "<h2>{$book[0]->getTitle()}</h2>";
        echo "<h3>År: {$book[0]->getYear()}</h3>";
    }
    
    public function renderAddedBook (array $authors) {
        echo "<form action='form-handlers/book-form-handler.php' method='POST'>
    <div>
        <label for='title'>Titel: </label>
        <input type='text' name='title' id='title'>
    </div>
    <div>
        <label for='year'>Publicerad: </label>
        <input type='text' name='year' id='year'>
    </div>
    <div>
        <label for='year'>Antal sidor: </label>
        <input type='text' name='pages' id='pages'>
    </div>
    <div>
        <label for='author'>Författare:</label>
        <select name='author-id' id='author'>
            <option value=''>--Välj författare--</option>";

            $authors = $authorModel->getAllAuthors();
            foreach ($authors as $author) {
                echo "<option value='{$author['id']}'>
                {$author['first_name']} {$author['last_name']}</option>";
            }
        

        echo "</select>
        <a href='authors.php?create=new'>Lägg till</a>
        </div>";
        echo "<button type='submit'>Skapa bok/button>";
        echo "</form>";
    }
}
