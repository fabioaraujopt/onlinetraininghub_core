<?php

namespace App\Controller\Admin;

use App\Entity\PaymentPlan;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PaymentPlanCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PaymentPlan::class;
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
