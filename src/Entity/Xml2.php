<?php

namespace App\Entity;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation as A;

// for annotations see
// http://jmsyst.com/libs/serializer/master/reference/annotations

/**
 * @A\XmlRoot("metadata")
 */
class Xml2
{
    /**
     * @A\SerializedName("column")
     * @A\Type("array<App\Entity\Xml3>")
     * @A\XmlList(inline = true, entry = "column")
     */
    private $column;
}