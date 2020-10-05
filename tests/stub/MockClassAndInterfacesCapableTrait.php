<?php


namespace Dhii\I18n\Test\Stub;


use PHPUnit\Framework\MockObject\MockBuilder;

trait MockClassAndInterfacesCapableTrait
{
    /**
     * Builds a mock that both extends the specified class, and implements the specified interfaces.
     *
     * @param string $className
     * @param array $interfaceNames
     * @return MockBuilder
     */
    public function mockClassAndInterfaces(string $className, array $interfaceNames): MockBuilder
    {
        $interfaceNamesString = implode(', ', $interfaceNames);
        $classesHash = substr(sha1(base64_encode("$className|$interfaceNamesString")), 0, 8);
        $uniqueSuffix = "{$classesHash}_" . uniqid('');
        $proxyName = "{$className}_{$uniqueSuffix}";
        eval("abstract class $proxyName extends $className implements $interfaceNamesString {}");
        $builder = $this->getMockBuilder($proxyName);

        return $builder;
    }

    /**
     * Returns a builder object to create mock objects using a fluent interface.
     *
     * @param string|string[] $className A class name, or array of interface names.
     *
     * @return MockBuilder The new mock builder.
     */
    abstract public function getMockBuilder($className): MockBuilder;
}