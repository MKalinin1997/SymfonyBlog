<?php
// src/App/Entity/Xml.php

namespace App\Entity;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlKeyValuePairs;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlDiscriminator;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Xml;
/**
 * @ORM\Table(name="xml")
 * @ORM\HasLifecycleCallbacks
 */

/** @XmlRoot("data")
 * @XmlDiscriminator(attribute=true)
 */
class Xml1 extends Xml
{
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }


    /**
     * @XmlList(inline = true, entry = "row")
     */
    /**
     * @ORM\Column(type="integer", nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")

     * @Type("integer")
     */
    protected $id;

    /** @XmlAttribute;
     * @Type("string")

     */
    protected $name;

    /** @XmlAttribute;
     * @Type("string")

     */
    protected $type;

    /**
     * @Type("string")
     */
    protected $row = array(Xml::class);
}