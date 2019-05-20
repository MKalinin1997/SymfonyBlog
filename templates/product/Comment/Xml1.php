<?php
// src/Blogger/BlogBundle/Entity/Xml.php

namespace App\Entity;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlKeyValuePairs;
use JMS\Serializer\Annotation\XmlAttribute;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

class Xml1
{
    public function __construct()
    {
        $this->rows = new ArrayCollection();
    }

    /**
     * @JMS\Type("ArrayCollection<App\Entity\Xml>")
     * @JMS\XmlList(inline=true, entry="row")
     */
    public $rows;
}