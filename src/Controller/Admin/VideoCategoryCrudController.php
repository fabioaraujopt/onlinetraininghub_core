<?php

namespace App\Controller\Admin;

use App\Entity\VideoCategory;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class VideoCategoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return VideoCategory::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
