<?php

namespace dVAffection\AbstractConfirmation\Tests\Mapper\Confirmation;

use dVAffection\AbstractConfirmation\Mapper\Confirmation\ConfirmationInterface;
use dVAffection\AbstractConfirmation\Tests\Model\Confirmation\Stab as Model;

class Stab implements ConfirmationInterface
{

    private $storage = array();

    /**
     * Create confirmation and return it
     *
     * @param mixed $callback
     * @param array $params
     * @return Model
     * @throws \RuntimeException
     */
    public function create($callback, array $params = array())
    {
        $id = $this->generateId();

        if (isset($this->storage[$id])) {
            throw new \RuntimeException('Something went wrong! Generated ID already exists.');
        }

        $model = new Model;
        $model->setId($id);
        $model->setCallback($callback);
        $model->setParams($params);
        $model->setCreatedAt(new \DateTime());

        $this->storage[$id] = $model;

        return $id;
    }

    /**
     * Remove confirmation by ID
     *
     * @param mixed $id
     */
    public function delete($id)
    {
        unset($this->storage[$id]);
    }

    /**
     * Find confirmation by ID
     *
     * @param mixed $id
     * @return Model|false
     */
    public function find($id)
    {
        return isset($this->storage[$id]) ? $this->storage[$id] : false;
    }

    private function generateId()
    {
        return mt_rand(0, 10000);
    }

} 
