@extends('posts.summernote')
@section('create')
<div class="form-group">
    <label for="tag">
        タグ
    </label>
    <input type="checkbox" name="tag[]" value="釣行記"> 釣行記
    <input type="checkbox" name="tag[]" value="ルアー"> ルアー
    <input type="checkbox" name="tag[]" value="インプレ"> インプレ
    <input type="checkbox" name="tag[]" value="その他"> その他
    @error('tag')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
@endsection