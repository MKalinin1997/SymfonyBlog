<?php

namespace App\Entity;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation as A;

// for annotations see
// http://jmsyst.com/libs/serializer/master/reference/annotations

/**
 * A\ExclusionPolicy("all")
 * @A\XmlRoot("data")
 */
class Data
{
    /**
     * @A\Type("integer")
     */
    private $id;

    /**
     * @A\Type("string")
     */
    private $name;

    /**
     * @A\Type("array<string>")
     */
    private $values = [];

    /**
     * @A\Type("integer")
     */
    private $null = null;
}