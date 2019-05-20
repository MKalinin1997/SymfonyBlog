<?php

namespace App\Entity;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation as A;

// for annotations see
// http://jmsyst.com/libs/serializer/master/reference/annotations

/**
 * @A\XmlRoot("column")
 */
class Xml3
{
    /**
     * @A\XmlKeyValuePairs()
     * @A\Type("string")
     * @A\XmlAttribute
     */
    private $name;
    /**
     * @A\XmlKeyValuePairs()
     * @A\Type("string")
     * @A\XmlAttribute
     */
    private $type;
}