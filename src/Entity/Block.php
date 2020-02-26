<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BlockRepository")
 */
class Block
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Button", mappedBy="block", orphanRemoval=true, cascade={"persist"})
     */
    private $buttons;

    public function __construct()
    {
        $this->buttons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Button[]
     */
    public function getButtons(): Collection
    {
        return $this->buttons;
    }

    public function addButton(Button $button): self
    {
        if (!$this->buttons->contains($button)) {
            $this->buttons[] = $button;
            $button->setBlock($this);
        }

        return $this;
    }

    public function removeButton(Button $button): self
    {
        if ($this->buttons->contains($button)) {
            $this->buttons->removeElement($button);
            // set the owning side to null (unless already changed)
            if ($button->getBlock() === $this) {
                $button->setBlock(null);
            }
        }

        return $this;
    }
}
