<?php

namespace dVAffection\AbstractConfirmation\Tests\Mapper\Confirmation;

use dVAffection\AbstractConfirmation\Mapper\Confirmation\ConfirmationInterface;
use dVAffection\AbstractConfirmation\Tests\Model\Confirmation\Stab as Model;

class Stab implements ConfirmationInterface
{

    private $storage = array();

    /**
     * {@inheritDoc}
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
     * {@inheritDoc}
     */
    public function delete($idOrModel)
    {
        if ($idOrModel instanceof Model) {
            $id = $idOrModel->getId();
        } else {
            $id = $idOrModel;
        }

        unset($this->storage[$id]);
    }

    /**
     * {@inheritDoc}
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
