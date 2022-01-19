<?php

namespace ImageGroup;

use App\Entity\ImageGroup;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ImageGroupCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ImageGroup::class;
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
