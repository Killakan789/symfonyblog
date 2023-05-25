<?php

namespace App\Entity;

use App\Repository\CourseVideoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CourseVideoRepository::class)]
class CourseVideo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 500)]
    private ?string $file = null;

    #[ORM\Column]
    private ?int $lesson_number = null;

    #[ORM\ManyToOne(inversedBy: 'courseVideos')]
    #[ORM\JoinColumn(nullable: false)]
    private ?CourseCategory $category_id = null;
    
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(string $file): self
    {
        $this->file = $file;

        return $this;
    }

   

    public function getLessonNumber(): ?int
    {
        return $this->lesson_number;
    }

    public function setLessonNumber(int $lesson_number): self
    {
        $this->lesson_number = $lesson_number;

        return $this;
    }

    public function getCategoryId(): ?CourseCategory
    {
        return $this->category_id;
    }

    public function setCategoryId(?CourseCategory $category_id): self
    {
        $this->category_id = $category_id;

        return $this;
    }

    
}
