<?php

namespace App\Entity;

use App\Repository\CustomerRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bundle\MakerBundle\Validator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=BlogRepository::class)
 */
class Blog
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $short_description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

	/**
	 * @ORM\Column(type="integer", length=11)
	 */
	private $category_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->short_description;
    }

    public function setShortDescription(string $short_decription): self
    {
        $this->short_description = $short_decription;

        return $this;
    }

    public function getCategoryId(): ?string
    {
        return $this->category_id;
    }

    public function setCategoryId(string $category_id): self
    {
        $this->category_id = $category_id;

        return $this;
    }

    public function toArray()
    {

        return [
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'short_description' => $this->getShortDescription(),
            'description' => $this->getDescription(),
            'category_id' => $this->getCategoryId()
        ];
    }




}
