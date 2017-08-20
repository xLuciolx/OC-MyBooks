<?php

namespace MyBooks\DAO;
use       MyBooks\Domain\Author;

class AuthorDAO extends DAO {

  /**
   * Find author from supplied id
   * @method find
   * @param  int $id
   * @return Author| throws exception if no author match id
   */
  public function find($id){
    $sql = 'SELECT * FROM author
            WHERE auth_id = ?';

    $row = $this->getDb()->fetchAssoc($sql, [$id]);

    if ($row) {
      return $this->buildDomainObject($row);
    }
    else {
      throw new \Exception('No auyhor matching id ' . $id);
    }
  }

  protected function buildDomainObject($row){
    $author = new Author();
    $author->setId($row['auth_id']);
    $author->setFirstName($row['auth_first_name']);
    $author->setLastName($row['auth_last_name']);
    return $author;  
  }

}
