<?php

namespace App\Entity;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation as A;
use App\Entity\Xml1;

// for annotations see
// http://jmsyst.com/libs/serializer/master/reference/annotations

/**
* A\ExclusionPolicy("all")
* @A\XmlRoot("data")
*/
class Xml
{
    /**
     * @A\Type("integer")
     */
    private $id;
    /**
     * @A\XmlAttribute
     * @A\Type("string")
     */
    private $strin;
    /**
     * @A\XmlKeyValuePairs()
     * @A\SerializedName("metadata");
     * @A\Type("App\Entity\Xml1")
     */
    private $metadata = [];
}