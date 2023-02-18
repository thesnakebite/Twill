@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'Title',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'subtitle',
        'label' => 'Subtítulo',
        'maxlength' => 200
    ])

    @formField('tags', [
        'label' => 'Tags',
    ])

    @formField('input', [
        'name' => 'owner',
        'label' => 'Dueño',
        'note' => 'Primer nombre e inicial del apellido',
        'maxlength' => 200
    ])

    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Descripción de la receta',
        'toolbarOptions' => [ 
            [ 'header' => [1, 2, false] ], 
            'clean', 'bold', 'italic', 'underline', 'list-ordered', 'list-unordered',
            [ 'indent' => '-1'], [ 'indent' => '+1' ] 
        ],

        'editSource' => true,
    ])

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Imagen de la receta completa'
    ])


@stop
