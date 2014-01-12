<?php

namespace dVAffection\AbstractConfirmation\Tests\Service;

use dVAffection\AbstractConfirmation\Service\Confirmation as Service;
use dVAffection\AbstractConfirmation\Tests\Mapper\Confirmation\Stab as Mapper;

class ConfirmationTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Service
     */
    private $service;

    protected function setUp()
    {
        $this->service = new Service(new Mapper);
    }

    public function test()
    {
        $id          = $this->service->create('does not matter');
        $actualModel = $this->service->find($id);
        $this->assertInstanceOf('dVAffection\AbstractConfirmation\Model\Confirmation\ConfirmationInterface', $actualModel);

        $this->service->delete($actualModel);
        $actualModel = $this->service->find($id);
        $this->assertSame(false, $actualModel);
    }

}
