<?php

namespace dVAffection\AbstractConfirmation\Service;

use dVAffection\AbstractConfirmation\Mapper\Confirmation\ConfirmationInterface as Mapper;
use dVAffection\AbstractConfirmation\Model\Confirmation\ConfirmationInterface as Model;

class Confirmation
{

    /**
     * @var Mapper
     */
    private $mapper;

    /**
     * Create confirmation and return it
     *
     * @param mixed $callback
     * @param array $params
     * @return Model
     */
    public function create($callback, array $params = array())
    {
        return $this->getMapper()->create($callback, $params);
    }

    /**
     * Find confirmation by ID
     *
     * @param mixed $id
     * @return Model|false
     */
    public function find($id)
    {
        return $this->getMapper()->find($id);
    }

    /**
     * Remove confirmation by ID
     *
     * @param mixed $id
     */
    public function delete($id)
    {
        $this->getMapper()->delete($id);
    }

    function __construct(Mapper $mapper)
    {
        $this->setMapper($mapper);
    }


    /**
     * @param Mapper $mapper
     */
    public function setMapper($mapper)
    {
        $this->mapper = $mapper;
    }

    /**
     * @return Mapper
     */
    public function getMapper()
    {
        return $this->mapper;
    }

}
