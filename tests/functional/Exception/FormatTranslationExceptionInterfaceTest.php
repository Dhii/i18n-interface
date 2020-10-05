<?php

namespace Dhii\I18n\Test\Func\Exception;

use Dhii\I18n\Exception\FormatTranslationExceptionInterface as Subject;
use Dhii\I18n\Exception\ContextStringTranslationExceptionInterface;
use Dhii\I18n\Test\Stub\MockClassAndInterfacesCapableTrait;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Throwable;

class FormatTranslationExceptionInterfaceTest extends TestCase
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
        $this->assertInstanceOf(ContextStringTranslationExceptionInterface::class, $subject, 'Subject does not implement required interface');
    }
}
