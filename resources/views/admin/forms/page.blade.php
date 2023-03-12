@extends('layouts.admin')

@section('content')
    @include('partials.admin.form.init')
    @include('partials.admin.form.dropdown', ['attribute' => 'parent_id', 'null' => true])
    @foreach (['title', 'title_ru', 'description', 'description_ru', 'img'] as $a)
        @include('partials.admin.form.text', ['attribute' => $a])
    @endforeach
    @include('partials.admin.form.textarea', ['attribute' => 'content'])
    @include('partials.admin.form.textarea', ['attribute' => 'content_ru'])
    @include('partials.admin.form.submit')
@endsection
