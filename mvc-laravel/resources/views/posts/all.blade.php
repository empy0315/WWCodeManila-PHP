@include('includes.head')
<div>hello html blade</div>
            <div class="links">
                @foreach ($posts as $post)
                    <a href="{{url('/post')}}/{{$post->post_id}}">{{$post->title}}</a> <br>
                @endforeach
            </div>
@include('includes.footer')
