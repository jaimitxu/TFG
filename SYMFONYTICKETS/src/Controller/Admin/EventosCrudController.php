<?php

namespace App\Controller\Admin;

use App\Entity\Eventos;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;

class EventosCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Eventos::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->OnlyOnDetail(),
            TextField::new('nombre'),
            TextEditorField::new('descripcion'),
            NumberField::new('capacidad'),
            DateField::new('fecha')
        ];
    }
    
}
