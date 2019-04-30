<?php

namespace App\Serializer;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation;

class Deserializer
{
    public function Serialize($object)
    {
        $serializer = SerializerBuilder::create()->build();
        $serializer->serialize($object, 'json');
        $serializer->serialize($object, 'xml');
    }
}