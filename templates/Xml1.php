<?php

namespace App\Entity;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation as A;

// for annotations see
// http://jmsyst.com/libs/serializer/master/reference/annotations

/**
 * A\ExclusionPolicy("all")
 * @A\XmlRoot("column")
 */
class Xml1 extends Xml
{
    /**
     * @A\Type("name")
     * @A\XmlAttribute()
     */
    private $name;
}