<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FlagRepository")
 */
class Flag
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $displaySwitch;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDisplaySwitch(): ?bool
    {
        return $this->displaySwitch;
    }

    public function setDisplaySwitch(bool $displaySwitch): self
    {
        $this->displaySwitch = $displaySwitch;

        return $this;
    }
}
