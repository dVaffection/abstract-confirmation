<?php

namespace dVAffection\AbstractConfirmation\Model\Confirmation;

abstract class AbstractConfirmation implements ConfirmationInterface
{

    protected $id;
    protected $callback;
    protected $params;
    protected $createdAt;


    /**
     * {@inheritDoc}
     */
    public function getCallback()
    {
        return $this->callback;
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * {@inheritDoc}
     */
    public function setCallback($callback)
    {
        $this->callback = $callback;
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * {@inheritDoc}
     */
    public function setParams(array $params = array())
    {
        $this->params = $params;
    }

} 
