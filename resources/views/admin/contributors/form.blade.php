@extends('twill::layouts.form')

@section('contentFields')

@formField('tags', [
    'label' => 'Especialidad',
    'note' => 'Chef de pescados, Chef de parrilla , Chef de asados , etc..' 
])

@formField('files', [
    'name' => 'resume',
    'label' => 'Resume',
    'note' => 'El archivo debe ser un PDF' 
])

@formField('medias', [
    'name' => 'avatar',
    'label' => 'Avatar',
    'note' => 'Una foto tuya.' 
])

@formField('input', [
    'name' => 'email',
    'label' => 'Email',
    'maxlength' => 200
])

@formField('input', [
    'name' => 'twitter',
    'label' => 'Twitter',
    'placeholder' => '@twill4eva',
    'maxLength' => 200
])

@formField('input', [
    'name' => 'portfolio_link',
    'note' => 'GitHub, Dribble, CodePen, etc..',
    'label' => 'Portfolio URL',
    'placeholder' => 'http://behance.com/sbass',
    'maxlength' => 200
])

@formField('input', [
    'name' => 'linkedin',
    'label' => 'LinkedIn',
    'placeholder' => 'https://lindekin.com/shass',
    'maxlength' => 200
])

@formField('block_editor', [
    'label' => 'Biografía de habilidad',
    'blocks' => ['quote', 'paragraph', 'paragraph_image', 'project_detail']
])
@stop
