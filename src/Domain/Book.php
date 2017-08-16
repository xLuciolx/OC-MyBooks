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
   * Author id
   * @var int
   */
  private $idAuth;

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

  /**
   * @return int
   */
  public function getIdAuth(): int
  {
    return $this->idAuth;
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
   * @param int $idAuth
   *
   * @return static
   */
  public function setIdAuth(int $idAuth)
  {
    $this->idAuth = $idAuth;
    return $this;
  }
}
