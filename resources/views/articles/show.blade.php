@extends('layouts/basearticle')
<style>
    .imgTam{
        width: 40vw;
    }
</style>
@section('ModulosMenus')
    @foreach ($modules as $moduleMenu)
    <li><a href="{{route('module.show', ['module' => $moduleMenu])}}">{{$moduleMenu->title}}</a></li>
    @endforeach
@endsection

@section('TopicosFull')
@foreach ($topics as $topicFull)
<div class="uk-inline">
<h2 id="{{$topicFull->id}}">{{$topicFull->title}}</h2>
<p>{!!$topicFull->description!!} TESTE</p>
@if ($topicFull->img == !null)
<img class="imgTam" style="margin-left: 1vw; margin-bottom: 1.5rem;" src="{{$topicFull->img}}">
@endif
</div>
@endforeach
@endsection

@section('ArtigosRelacionados')
@foreach ($articles as $topicFull)
<li><a href="{{$topicFull->id}}">{{$topicFull->title}}</a></li>
@endforeach
@endsection
