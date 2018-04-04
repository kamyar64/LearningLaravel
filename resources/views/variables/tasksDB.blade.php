<ul>
    @foreach($tasks as $task)
        <li><a href="{{route('tasks',$task->id)}}">{{ $task->body }} </a> </li>
    @endforeach
</ul>

