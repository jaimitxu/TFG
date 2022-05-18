<?php

namespace App\Controller\Admin;

use App\Entity\Artistas;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ArtistasCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Artistas::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name'),
            AssociationField::new('generosMusicales'),
            ImageField::new('imagen') 
            ->setBasePath('uploads/images')
            ->setUploadDir('public/images/uploads')
            ->onlyOnForms(),
        ];
    }
    
}
