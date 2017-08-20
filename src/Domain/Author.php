<?php

namespace MyBooks\Domain;

class Author {

  /**
   * Author id
   * @var int
   */
  private $id;

  /**
   * Author first name
   * @var string
   */
  private $firstName;

  /**
   * Author last name
   * @var string
   */
  private $lastName;

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
  public function getFirstName(): string
  {
    return $this->firstName;
  }

  /**
   * @return string
   */
  public function getLastName(): string
  {
    return $this->lastName;
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
   * @param string $firstName
   *
   * @return static
   */
  public function setFirstName(string $firstName)
  {
    $this->firstName = $firstName;
    return $this;
  }

  /**
   * @param string $lastName
   *
   * @return static
   */
  public function setLastName(string $lastName)
  {
    $this->lastName = $lastName;
    return $this;
  }
}
