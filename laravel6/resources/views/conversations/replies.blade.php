@foreach($conversation->replies as $reply)
    <div>
        <p class="m-0"><strong>{{$reply->user->name}} said ... </strong></p>
        {{$reply->body}}

        @can('update',$conversation)
        <form method="post" action="/best-replies/{{$reply->id}}">
            @csrf
            <button type="submit" class="btn p-0">Best Reply ?</button>
        </form>
        @endcan
    </div>
    @continue($loop->last)
    <hr/>
@endforeach