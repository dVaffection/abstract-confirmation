<?php

namespace dVAffection\AbstractConfirmation\Model\Confirmation;

interface ConfirmationInterface
{

    /**
     * @return mixed
     */
    public function getId();

    /**
     * @param mixed $id
     */
    public function setId($id);

    /**
     * @return mixed
     */
    public function getCallback();

    /**
     * @param mixed $callback
     */
    public function setCallback($callback);

    /**
     * @return array
     */
    public function getParams();

    /**
     * @param array $params
     */
    public function setParams(array $params = array());

    /**
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt);

} 
