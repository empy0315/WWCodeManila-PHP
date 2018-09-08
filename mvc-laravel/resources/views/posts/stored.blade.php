@include('includes.head')
                <div class="title m-b-md">
                    {{$post->title}}
                </div>
                {{$post->content}}  
                {{$post->created_at}}  
                <a href="{{url('/edit')}}/{{$post->post_id}}">Edit</a>  
                <a href="{{url('/delete')}}/{{$post->post_id}}">Delete</a>   
@include('includes.footer')
