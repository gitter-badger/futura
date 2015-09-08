<?php
namespace Futura\Solid\SRP;

class Book {

    public function getTitle() {
      return "A Great Book";
    }

    public function getAuthor() {
      return "Tunggunner";
    }

    public function turnPage() {

    }

    public function printCurrentPage() {
      return "current page content";
    }

}

interface Printer {
    function printPage($page);
}

class PlainTextPrinter implements Printer {

    function printPage($page) {
      echo $page;
    }

}

class HtmlPrinter implements Printer {

    function printPage($page) {
        echo '<div style="single-page">' . $page . '</div>';
    }

}

class SimpleFilePersistence {

    function save(Book $book) {
        $filename = '/documents/' . $book->getTitle() . ' - ' . $book->getAuthor();
        file_put_contents($filename, serialize($book));
    }

}