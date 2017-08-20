<?php

namespace MyBooks\DAO;
use       MyBooks\Domain\Book;

class BookDAO extends DAO {

  /**
   * @var AuthorDAO
   */
  private $authorDAO;

  public function setAuthorDAO(AuthorDAO $authorDAO){
    $this->authorDAO = $authorDAO;
  }

  /**
   * Return a list of all books, sorted by date
   * @method findAll
   * @return array  A list of all books
   */
  public function findAll() {
    $sql    = "SELECT * FROM book
               ORDER BY book_id
               DESC";
    $result = $this->getDb()->fetchAll($sql);

    // Convert query result to an array of domain objects
    $books = array();
    foreach ($result as $row) {
        $bookId         = $row['book_id'];
        $books[$bookId] = $this->buildDomainObject($row);
      }
    return $books;
  }

  /**
   * Return a book matchong the supplied id
   * @method find
   * @param  int $id
   * @return Book | throw an exception if no book is found
   */
  public function find($id){
    $sql = 'SELECT * FROM book
            WHERE book_id = ?';

    $row = $this->getDb()->fetchAssoc($sql, [$id]);

    if ($row) {
      return $this->buildDomainObject($row);
    }
    else {
      throw new \Exception('No book matching id ' . $id);

    }
  }

  protected function buildDomainObject($row){
    $book = new Book();
    $book->setId($row['book_id']);
    $book->setTitle($row['book_title']);
    $book->setIsbn($row['book_isbn']);
    $book->setSummary($row['book_summary']);

    $authorId = $row['auth_id'];
    $author   = $this->authorDAO->find($authorId);
    $book->setAuthor($author);

    return $book;
  }


}
