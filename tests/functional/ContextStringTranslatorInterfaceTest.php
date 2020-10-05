<?php

namespace Dhii\I18n\Test\Func;

use Dhii\I18n\StringTranslatorInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Dhii\I18n\ContextStringTranslatorInterface as Subject;

class ContextStringTranslatorInterfaceTest extends TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @return Subject&MockObject
     */
    public function createInstance()
    {
        $mock = $this->getMockBuilder(Subject::class)
            ->getMockForAbstractClass();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(Subject::class, $subject, 'A valid instance of the test subject could not be created');
        $this->assertInstanceOf(StringTranslatorInterface::class, $subject, 'Subject does not implement required interface');
    }
}