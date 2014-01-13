<?php

namespace dVAffection\AbstractConfirmation\Tests\Model\Confirmation;

use dVAffection\AbstractConfirmation\Model\Confirmation\AbstractConfirmation;

class AbstractConfirmationTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var AbstractConfirmation
     */
    private $model;

    protected function setUp()
    {
        $this->model = new Stub;
    }

    public function testId()
    {
        $expected = '23234dsadasdjdfv78';

        $this->model->setId($expected);
        $actual = $this->model->getId();

        $this->assertSame($expected, $actual);
    }

    public function testCallback()
    {
        $expected = array($this, 'test');

        $this->model->setCallback($expected);
        $actual = $this->model->getCallback();

        $this->assertSame($expected, $actual);
    }

    public function testParams()
    {
        $expected = array('param', 'test');

        $this->model->setParams($expected);
        $actual = $this->model->getParams();

        $this->assertSame($expected, $actual);
    }

    public function testCreatedAt()
    {
        $expected = new \DateTime();

        $this->model->setCreatedAt($expected);
        $actual = $this->model->getCreatedAt();

        $this->assertSame($expected, $actual);
    }

}
