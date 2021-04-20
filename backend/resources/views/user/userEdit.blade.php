@extends('layouts.app')
@section('title','ユーザー情報変更')

@section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (Auth::id() == 1)
    <p class="text-danger">※ゲストユーザーは、ユーザー名とサムネイルを編集できません。</p>
    @endif

    <div class="topWrapper">
        @if(!empty($authUser->thumbnail))
        <img src="/storage/user/{{ $authUser->thumbnail }}" class="editThumbnail">
        @else
        画像なし
        @endif
    </div>

    <form method="post" action="{{ route('user.userUpdate') }}" enctype="multipart/form-data">
        {{ csrf_field() }}


        <div class="labelTitle">Name</div>
        <div>
            <input type="text" class="userForm" name="name" placeholder="User" value="{{ $authUser->name }}">
            @if($errors->has('name'))<div class="error">{{ $errors->first('name') }}</div>@endif
        </div>


        <div class="labelTitle">Thumbnail</div>

        <div>
            <input type="file" name="thumbnail">
            @if($errors->has('thumbnail'))<div class="error">{{ $errors->first('thumbnail') }}</div>@endif
        </div>

        <div class="buttonSet">
            @if (Auth::id() !== 1)
            <input type="submit" name="send" value="ユーザー変更" class="btn btn-primary btn-sm btn-done">
            @endif
            <a href="{{ route('users.show',$authUser) }}" class="btn btn-primary btn-sm">戻る</a>
        </div>
    </form>
</div>
@endsection