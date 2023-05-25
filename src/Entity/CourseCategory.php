<?php

namespace App\Entity;

use App\Repository\CourseCategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CourseCategoryRepository::class)]
class CourseCategory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\OneToMany(mappedBy: 'category_id', targetEntity: Course::class, orphanRemoval: true)]
    private Collection $courses;

    #[ORM\OneToMany(mappedBy: 'category_id', targetEntity: CourseVideo::class, orphanRemoval: true)]
    private Collection $courseVideos;

    public function __construct()
    {
        $this->courses = new ArrayCollection();
        $this->courseVideos = new ArrayCollection();
    }
    
    public function __toString() {
        return (string) $this->getId();
    }

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

    /**
     * @return Collection<int, Course>
     */
    public function getCourses(): Collection
    {
        return $this->courses;
    }

    public function addCourse(Course $course): self
    {
        if (!$this->courses->contains($course)) {
            $this->courses->add($course);
            $course->setCategoryId($this);
        }

        return $this;
    }

    public function removeCourse(Course $course): self
    {
        if ($this->courses->removeElement($course)) {
            // set the owning side to null (unless already changed)
            if ($course->getCategoryId() === $this) {
                $course->setCategoryId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, CourseVideo>
     */
    public function getCourseVideos(): Collection
    {
        return $this->courseVideos;
    }

    public function addCourseVideo(CourseVideo $courseVideo): self
    {
        if (!$this->courseVideos->contains($courseVideo)) {
            $this->courseVideos->add($courseVideo);
            $courseVideo->setCategoryId($this);
        }

        return $this;
    }

    public function removeCourseVideo(CourseVideo $courseVideo): self
    {
        if ($this->courseVideos->removeElement($courseVideo)) {
            // set the owning side to null (unless already changed)
            if ($courseVideo->getCategoryId() === $this) {
                $courseVideo->setCategoryId(null);
            }
        }

        return $this;
    }
}
