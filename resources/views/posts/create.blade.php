<!-- 参考　 https://nebikatsu.com/7896.html/-->

<!-- Quill -->
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
@extends('layouts.app')
@section('title', 'create page')
@section('postContent')


    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                投稿の新規作成
            </h1>

            <form method="POST" action="{{ route('posts.store') }}" name="ansform" enctype="multipart/form-data">
                @csrf

                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="title">
                            タイトル
                        </label>
                        <input
                            id="title"
                            name="title"
                            class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                            value="{{ old('title') }}"
                            type="text"
                        >
                        @if ($errors->has('title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="tag">
                            タグ
                        </label>
                        <input
                            id="tag"
                            name="tag"
                            class="form-control {{ $errors->has('tag') ? 'is-invalid' : '' }}"
                            value="{{ old('tag') }}"
                            type="text"
                        >
                        @if ($errors->has('tag'))
                            <div class="invalid-feedback">
                                {{ $errors->first('tag') }}
                            </div>
                        @endif
                    </div>





                    <div class="form-group">
                        <label for="body">
                            本文
                        </label>

                       
                        <div  id="editor" style="height: 1000px;"></div> 
                        <input type="hidden" name="body">
                        
                        
                        


                        @if ($errors->has('body'))
                            <div class="invalid-feedback">
                                {{ $errors->first('body') }}
                            </div>
                        @endif
                    </div>

                    <div class="mt-5">
                        <a class="btn btn-secondary" href="{{ route('top') }}">
                            キャンセル
                        </a>
                        <input type="submit" class="btn btn-primary" name="subbtn">
                        
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <script>
        var quill = new Quill('#editor', {
            modules: {
    toolbar: [
       ['bold', 'italic', 'underline', 'strike'],
       [{'color': []}, {'background': []}],
       ['link', 'blockquote', 'image', 'video'],
       [{ list: 'ordered' }, { list: 'bullet' }]
     ]
  },
  placeholder: 'Write your question here...',
  theme: 'snow'
        });
        // 回答フォームを送信
document.ansform.subbtn.addEventListener('click', function() {
// Quillのデータをinputに代入
document.querySelector('input[name=body]').value = document.querySelector('.ql-editor').innerHTML;
// 送信
document.ansform.submit();
});


    </script>
@endsection