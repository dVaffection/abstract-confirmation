<?php

namespace dVAffection\AbstractConfirmation\Mapper\Confirmation;

use dVAffection\AbstractConfirmation\Model\Confirmation\ConfirmationInterface as Model;

interface ConfirmationInterface
{

    /**
     * Create confirmation and return it
     *
     * @param mixed $callback
     * @param array $params
     * @return Model
     */
    public function create($callback, array $params = array());

    /**
     * Find confirmation by ID
     *
     * @param mixed $id
     * @return Model|false
     */
    public function find($id);

    /**
     * Remove confirmation by its ID or by Model object
     *
     * @param mixed $idOrModel
     */
    public function delete($idOrModel);

} 
