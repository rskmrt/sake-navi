@extends('admins.layouts.app')

@section('section')
<ul class="nav me-auto">
  <li class="nav-item"><a href="/admin/cocktail/create" class="nav-link link-dark px-2 active" aria-current="page">カクテル登録</a></li>
  <li class="nav-item"><a href="/admin/base/create" class="nav-link link-dark px-2">ベース登録</a></li>
  <li class="nav-item"><a href="/admin/split/create" class="nav-link link-dark px-2">材料登録</a></li>
</ul>
@endsection


@section('content')
  <div class="container">

    <section class="py-5 container">
      <div class="col-lg-6 col-md-8 mx-auto">
      <form action="/admin/cocktail/store" method="POST">
        @csrf
        
  
        @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
          <label for="name" class="form-label">カクテル名</label>
          <input name="name" type="text" class="form-control" id="cocktailname">
        </div>
        
        
        <p>ベース
          @foreach($bases as $base)
          <div class="form-check-inline">
            <input class="form-check-input" name="base[]" type="checkbox" value="{{ $base->id }}" id="{{ $base->name }}" >
            <label class="form-check-label" for="{{ $base->name }}">
              {{$base->name}}
            </label>
          </div>
          @endforeach
        </p>
  
        <p>材料
          @foreach($splits as $split)
          <div class="form-check-inline">
            <input class="form-check-input" name="split[]" type="checkbox" value="{{ $split->id }}" id="{{ $split->name }}" >
            <label class="form-check-label" for="{{ $split->name }}">
              {{$split->name}}
            </label>
          </div>
          @endforeach
        </p>
  
        <p>テイスト
          @foreach($tastes as $taste)
          <div class="form-check-inline">
            <input class="form-check-input" name="taste" type="radio" value="{{ $taste->id }}" id="{{ $taste->name }}">
            <label class="form-check-label" for="{{ $taste->name }}">
              {{$taste->name}}
            </label>
          </div>
          @endforeach
        </p>
  
        <p>アルコール度数
          @foreach($strengths as $strength)
          <div class="form-check-inline">
            <input class="form-check-input" name="strength" type="radio" value="{{ $strength->id }}" id="{{ $strength->name }}" >
            <label class="form-check-label" for="{{ $strength->name }}">
              {{$strength->name}}
            </label>
          </div>
          @endforeach
        </p>
        
        <p>技法
          @foreach($techniques as $technique)
          <div class="form-check-inline">
            <input class="form-check-input" name="technique" type="radio" value="{{ $technique->id }}" id="{{ $technique->name }}">
            <label class="form-check-label" for="{{ $technique->name }}">
              {{$technique->name}}
            </label>
          </div>
          @endforeach
        </p>
  
        <p>グラスタイプ
          @foreach($glasses as $glass)
          <div class="form-check-inline">
            <input class="form-check-input" name="glass" type="radio" value="{{ $glass->id }}" id="{{ $glass->name }}">
            <label class="form-check-label" for="{{ $glass->name }}">
              {{$glass->name}}
            </label>
          </div>
          @endforeach
        </p>
        
      <button type="submit" class="btn btn-outline-dark">登録</button> 
        
      </form>
      </div>
    </section>
      
      
  </div> 
@endsection
