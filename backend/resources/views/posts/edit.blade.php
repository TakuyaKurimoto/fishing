@extends('posts.summernote')
@section('create')
<div class="form-group">
    <label for="tag">
        タグ
    </label>
    <input type="hidden" name="user_id" value="{{$id}}">
    <input type="checkbox" name="tag[]" value="釣行記" <?php in_array('釣行記', unserialize($post->tag)) ? print "checked" :  ""?>>
    釣行記
    <input type="checkbox" name="tag[]" value="ルアー" <?php in_array('ルアー', unserialize($post->tag)) ? print "checked" :  ""?>
    >ルアー
    <input type="checkbox" name="tag[]" value="インプレ" <?php in_array('インプレ', unserialize($post->tag)) ? print "checked" :  ""?>>
    インプレ
    <input type="checkbox" name="tag[]" value="その他" <?php in_array('その他', unserialize($post->tag)) ? print "checked" :  ""?>>その他
    @error('tag')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
@endsection