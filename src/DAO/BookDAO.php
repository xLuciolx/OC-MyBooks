<?php

namespace MyBooks\DAO;

use Doctrine\DBAL\Connection;
use MyBooks\Domain\Book;

class BookDAO {

  /**
   * Database connection
   * @var Connection
   */
  private $db;

  /**
   * Constructor
   * @method __construct
   * @param  Connection  $db Database connection object
   */
  public function __construct(Connection $db)
  {
    $this->db = $db;
  }

  /**
   * Return a list of all books sorted by date (most recent first)
   * @method findAll
   * @return array List of all books
   */
  public function findAll(){
    $sql    = "SELECT * FROM book ORDER BY book_id DESC";
    $result = $this->db->fetchAll($sql);

    //convert query result to an array of domain object
    $books = array();
    foreach ($result as $row) {
      $bookId         = $row['book_id'];
      $books[$bookId] = $this->buildBook($row);
    }
    return $books;
  }

  /**
   * Creates a Book object based on a DB row
   * @method buildBook
   * @param  array $row The DB row containing Book data
   * @return Book
   */
  private function buildBook(array $row){
    $book = new Book();
    $book->setId($row['book_id']);
    $book->setTitle($row['book_title']);
    $book->setSummary($row['book_summary']);
    $book->setIsbn($row['book_isbn']);
    $book->setIdAuth($row['auth_id']);
    return $book;
  }
}
