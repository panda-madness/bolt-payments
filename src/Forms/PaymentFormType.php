<?php

namespace Bolt\Extension\PandaMadness\Payment\Forms;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PaymentFormType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', 'text', [
            'label' => 'Title'
        ]);
    }

    public function getName()
    {
        return 'payment_form';
    }

}