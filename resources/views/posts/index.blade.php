@extends('layouts.app')

@section('kensaku')

<form action="{{url('/')}}" method="GET">
<input type="text" name="keyword" placeholder="タグ検索"　value="{{$keyword}}"><input type="submit" value="検索">&nbsp; 
</form>

@endsection
@section('content')





@if($posts->count())
　　
    <div class="container mt-4">
        @foreach ($posts as $post)
            <div class="card mb-4">
                <div class="card-header">
                    タイトル：{{ $post->title }}
                </div>
                <div class="card-header">
                    タグ：{{ $post->tag }}
                </div>
                <div class="card-body">
                    
                    <a class="card-link" href="{{ route('posts.show', ['post' => $post]) }}">
                        続きを読む
                    </a>
                </div>
                <div class="card-footer">
                    <span class="mr-2">
                        投稿日時 {{ $post->created_at->format('Y.m.d') }}
                    </span>
                    @if ($post->comments->count())
                        <span class="badge badge-primary">
                            コメント {{ $post->comments->count() }}件
                        </span>
                    @endif
                </div>
            </div>
        @endforeach
        
    <div class="d-flex justify-content-center">
    {{ $posts->links('pagination::bootstrap-4') }}
　　</div>

    </div>

    @else
<p>見つかりませんでした。</p>
@endif

@endsection

