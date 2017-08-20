<?php

namespace MyBooks\Domain;

class Book {

  /**
   * Book id
   * @var int
   */
  private $id;

  /**
   * Book title
   * @var string
   */
  private $title;

  /**
   * Book summary
   * @var string
   */
  private $summary;

  /**
   * Book ISBN
   * @var string
   */
  private $isbn;

  /**
   * Associated author
   * @var Author
   */
  private $author;

  /*getters*/

  /**
   * @return int
   */
  public function getId(): int
  {
    return $this->id;
  }

  /**
   * @return string
   */
  public function getTitle(): string
  {
    return $this->title;
  }

  /**
   * @return string
   */
  public function getSummary(): string
  {
    return $this->summary;
  }

  /**
   * @return string
   */
  public function getIsbn(): string
  {
    return $this->isbn;
  }

  public function getAuthor(){
    return $this->author;
  }

  /*setters*/

  /**
   * @param int $id
   *
   * @return static
   */
  public function setId(int $id)
  {
    $this->id = $id;
    return $this;
  }

  /**
   * @param string $title
   *
   * @return static
   */
  public function setTitle(string $title)
  {
    $this->title = $title;
    return $this;
  }

  /**
   * @param string $summary
   *
   * @return static
   */
  public function setSummary(string $summary)
  {
    $this->summary = $summary;
    return $this;
  }

  /**
   * @param string $isbn
   *
   * @return static
   */
  public function setIsbn(string $isbn)
  {
    $this->isbn = $isbn;
    return $this;
  }

  /**
   * @param Author $author
   *
   * @return static
   */
  public function setAuthor(Author $author)
  {
    $this->author = $author;
    return $this;
  }
}
