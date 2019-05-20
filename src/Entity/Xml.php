<?php

namespace App\Entity;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation as A;
use App\Entity\Xml2;
use Doctrine\ORM\Mapping as ORM;

// for annotations see
// http://jmsyst.com/libs/serializer/master/reference/annotations

/**
 * @A\XmlRoot("data")
 */
class Xml
{
    /**
     * @A\SerializedName("metadata");
     * @A\Type("App\Entity\Xml2")
     */
    private $metadata;

    /**
     * @A\SerializedName("row");
     * @A\Type("array<App\Entity\Xml4>")
     * @A\XmlList(inline = true, entry = "row")
     */
    public $row;
}