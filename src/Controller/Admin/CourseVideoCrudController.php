<?php

namespace App\Controller\Admin;

use App\Entity\CourseCategory;
use App\Entity\CourseVideo;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CourseVideoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CourseVideo::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            AssociationField::new('category_id')->setCrudController(CourseCategoryCrudController::class),
            TextField::new('file'),
            IntegerField::new('lesson_number'),
        ];
    }
    
}
