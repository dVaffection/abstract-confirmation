<?php

namespace dVAffection\AbstractConfirmation\Tests\Service;

use dVAffection\AbstractConfirmation\Service\Confirmation as Service;

class ConfirmationTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Service
     */
    private $service;

    protected function setUp()
    {
        $mock = $this->getMapperMock();

        $this->service = new Service($mock);
    }

    public function test()
    {
        $callback = 'function';
        $params   = array('param' => 'test');

        $id = $this->service->create($callback, $params);

        $this->service->find($id);

        $this->service->delete($id);
    }

    private function getMapperMock()
    {
        $originalClassName = 'dVAffection\AbstractConfirmation\Mapper\Confirmation\ConfirmationInterface';

        $mock = $this->getMock($originalClassName);
        $mock->expects($this->once())
            ->method('create')
            ->with($this->equalTo('function'), $this->equalTo(array('param' => 'test')))
            ->will($this->returnValue('id-123'));

        $mock->expects($this->once())
            ->method('find')
            ->with($this->equalTo('id-123'));

        $mock->expects($this->once())
            ->method('delete')
            ->with($this->equalTo('id-123'));

        return $mock;
    }

}
