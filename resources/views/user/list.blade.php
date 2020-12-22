

  <!--投稿-->
@extends('layout')
@section('content')
@foreach($users as $user)
<div>
<p>
{{$user->title}}
</p>
<p>
{{$user->article}}
</p>
<!--記事全文・コメントへのリンク貼り付け--><!-- id=$ARTICLE[0]でurlにidを付随-->
    <a  href="/user/{{$user->id}}">記全文・コメント</a>
<hr>
</div>
@endforeach
@endsection
