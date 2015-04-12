<?php
/**
 * Created by PhpStorm.
 * User: edge
 * Date: 2015/04/12
 * Time: 14:12
 */

class DbRepository
{
    protected $con;

    public function __construct($con)
    {
        $this->setConnection($con);
    }

    public function setConnection($con)
    {
        $this->con = $con;
    }

    public function exectute($sql, $params = array())
    {
        $stmt = $this->con->prepare($sql);
        $stmt->execute($params);

        return $stmt;
    }

    public function fetch($sql, $params = array())
    {
        return $this->exectute($sql, $params)->fetch(PDO::FETCH_ASSOC);
    }

    public function fetchAll($sql, $params = array())
    {
        return $this->exectute($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
    }
}