@extends('layouts.app')
<?php
$locale = \App\Http\Controllers\Application\LangController::getLocale();
$title = $locale === 'ru' ? $object->title_ru : $object->title;
$description = $locale === 'ru' ? $object->description_ru : $object->description;
$content = $locale === 'ru' ? $object->content_ru : $object->content;
$img = $object->img;
?>

@include('partials.app.sections', [
'title' => getTitle($title),
'description' => getDescription($description),
'image' => getImage($object, 'img')
])

@section('content')
    @include('partials.app.hero', ['class' => 'has-text-centered'])
    @include('partials.app.content', ['content' => $content])
@endsection
