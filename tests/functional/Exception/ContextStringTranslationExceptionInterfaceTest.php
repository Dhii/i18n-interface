<?php

namespace Dhii\I18n\Test\Func\Exception;

use Dhii\I18n\Exception\ContextStringTranslationExceptionInterface as Subject;
use Dhii\I18n\Exception\StringTranslationExceptionInterface;
use Dhii\I18n\Test\Stub\MockClassAndInterfacesCapableTrait;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class ContextStringTranslationExceptionInterfaceTest extends TestCase
{
    use MockClassAndInterfacesCapableTrait;

    /**
     * Creates a new instance of the test subject.
     *
     * @return Subject&MockObject
     */
    public function createInstance()
    {
        $mock = $this->mockClassAndInterfaces(\Exception::class, [Subject::class])
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
        $this->assertInstanceOf(StringTranslationExceptionInterface::class, $subject, 'Subject does not implement required interface');
    }
}
