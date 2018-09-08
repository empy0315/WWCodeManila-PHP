@include('includes.head')
<div class="title m-b-md">
    Create your post
</div>
<form action="{{url('/edited')}}/{{$post->post_id}}" method="POST">
    @csrf
    <label>Title</label>
    <input type="text" name="postTitle" value="{{$post->title}}"><br>

    <input type="text" name="postId" value="{{$post->post_id}}" hidden><br>
    <label>Content</label>
    <textarea name="postContent" rows="8" cols="80">{{$post->content}} </textarea>
    <br>
    <input type="submit">
</form>
@include('includes.footer')