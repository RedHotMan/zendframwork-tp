<?php
declare(strict_types=1);

namespace Meetup\Form;

use Zend\Filter\DateTimeSelect;
use Zend\Form\Element;
use Zend\Form\Form;
use Zend\InputFilter\InputFilterProviderInterface;
use Zend\Validator\StringLength;

class MeetupForm extends Form implements InputFilterProviderInterface
{
    public function __construct()
    {
        parent::__construct('meetup');
        $this->add([
            'type' => Element\Text::class,
            'name' => 'title',
            'options' => [
                'label' => 'Title',
            ],
            'attributes' => [
                'placeholder' => 'Meetup title',
                'class' => 'form-control'
            ]
        ]);
        $this->add([
            'type' => Element\Submit::class,
            'name' => 'submit',
            'attributes' => [
                'value' => 'Submit',
                'class' => 'btn btn-success'
            ],
        ]);
        $this->add([
            'type' => Element\Textarea::class,
            'name' => 'description',
            'options' => [
                'label' => 'Description',
            ],
            'attributes' => [
                'placeholder' => 'Meetup description',
                'class' => 'form-control',
                'rows' => 4
            ]
        ]);
        $this->add([
            'type' => Element\Date::class,
            'name' => 'date_debut',
            'options' => [
                'label' => 'Date de début',
            ],
            'attributes' => [
                'placeholder' => 'Meetup Date de début',
                'class' => 'form-control'
            ]
        ]);
        $this->add([
            'type' => Element\Date::class,
            'name' => 'date_fin',
            'options' => [
                'label' => 'Date de fin',
            ],
            'attributes' => [
                'placeholder' => 'Meetup Date de fin',
                'class' => 'form-control'
            ]
        ]);
    }
    public function getInputFilterSpecification()
    {
        return [
            'title' => [
                'required' => true,
                'validators' => [
                    [
                        'name' => StringLength::class,
                    ],
                ],
            ],
            'description' => [
                'required' => true,
            ],
            'date_debut' => [
                'required' => true,
            ],
            'date_fin' => [
                'required' => true,
            ]
        ];
    }
}
