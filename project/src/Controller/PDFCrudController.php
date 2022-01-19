<?php

namespace App\Controller;

use App\Entity\PDF;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PDFCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PDF::class;
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
