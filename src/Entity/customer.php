<?php

namespace App\Entity;

use JMS\Serializer\Annotation as JMS;

class customer
{

    /**
     * @JMS\Type("string")
     */
    public $name;

    /**
     * @JMS\Type("string")
     */
    public $address;

    /**
     * @JMS\Type("string")
     */
    public $email;

    /**
     * @JMS\Type("string")
     */
    public $website;
}