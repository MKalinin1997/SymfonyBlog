<?php
// src/Command/CreateUserCommand.php
namespace App\Command;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
class SerializeSymfony extends ContainerAwareCommand
{

}