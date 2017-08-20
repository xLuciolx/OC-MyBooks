<?php

namespace MyBooks\DAO;
use Doctrine\DBAL\Connection;

abstract class DAO {

  /**
   * Database connection
   * @var Connection
   */
  private $db;

  /**
   * Constructor
   * @method __construct
   * @param  Connection $db Database connection object
   */
  public function __construct(Connection $db)
  {
    $this->db = $db;
  }

  /**
   * Grants access to the database connection object
   * @method getDb
   * @return Connection Database connection object
   */
  protected function getDb(){
    return $this->db;
  }

  protected abstract function buildDomainObject($row);

}
