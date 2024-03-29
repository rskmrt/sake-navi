@extends('layouts.app')

@section('search')
  @include('components.admins.search')
@endsection


@section('navbar')
  @include('components.admins.navbar')
@endsection


@section('header')
  @include('components.admins.header')
@endsection


@section('content')
  @include('components.admins.homemenu')
  <div class="container">
    <section class="py-5 container">
      <div class="col-lg-6 col-md-8 mx-auto">
        <form action="/admin/base/store"  method="POST">
          @csrf    
          @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <div class="mb-3">
            <label for="name" class="form-label">登録するベース</label>
            <input name="name" type="text" class="form-control">
            <div style="text-align: center; margin-top: 10px">
              <button type="button" class="btn btn-outline-dark" onclick=location.href='/admin'>戻る</button>
              <button type="submit" class="btn btn-outline-dark">登録</button>
            </div> 
          </div>
              
        </form>
      </div>
    </section>    

    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">@sortablelink('name', '材料名')</th>
          <th scope="col">@sortablelink('created_at', '作成日時')</th>
          <th scope="col">@sortablelink('updated_at', '更新日時')</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($admin_bases as $base)
        <tr>
          <form action="{{ route('admin.base.update', $base) }}" method="POST">
            @csrf
            <td><input type="text" name="name" value="{{ $base->name }}"></td>
            <td>{{ $base->created_at->format('Y/m/d h:i') }}</td>
            <td>{{ $base->updated_at->format('Y/m/d h:i') }}</td>
            <td>
              <div style="display:inline-flex">
              <button type="submit" class="btn btn-outline-dark btn-sm" onclick='return confirm("{{ $base->name }}を変更しますか？");'>更新</button> 
          </form>
          <form action="{{ route('admin.base.destroy' ,$base) }}" method="POST">
            @csrf
              <button type="submit" class="btn btn-outline-dark btn-sm" onclick='return confirm("{{ $base->name }}を削除しますか？");'>削除</button> 
            </td>
          </form>
        </tr>
        @endforeach
      </tbody>
    </table>

  </div> 
@endsection
