<?php

namespace App\Controller\Admin;

use App\Entity\GenerosMusicales;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;


class GenerosMusicalesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return GenerosMusicales::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->OnlyOnDetail(),
            TextField::new('nombre'),
            
        ];
    }
    
}
