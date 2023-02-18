@extends('twill::layouts.form')

@section('contentFields')
    @formField('block_editor', [
        'withoutSeparator' => true,
    ])
@stop

@section('sideFieldsets')
    @formFieldset(['id' => 'seo', 'title' => 'SEO'])
        @formField('input', [
            'name' => 'meta_title',
            'label' => 'Título',
            'translated' => true,
            'maxlength' => 100,
        ])

        @formField('input', [
            'name' => 'meta_description',
            'label' => 'Descripción',
            'translated' => true,
            'maxlength' => 200,
        ])
    @endformFieldset
@stop


