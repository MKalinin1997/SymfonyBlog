<?php

namespace App\Entity;

use JMS\Serializer\Annotation as JMS;
use Doctrine\Common\Collections\ArrayCollection;

class customers
{

    public function __construct()
    {
        $this->customers = new ArrayCollection();
    }

    /**
     * @JMS\Type("ArrayCollection<App\Entity\customer>")
     * @JMS\XmlList(inline=true, entry="customer")
     */
    public $customers;
}