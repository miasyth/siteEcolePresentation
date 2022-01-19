<?php

namespace Background;

use App\Entity\Background;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BackgroundCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Background::class;
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
