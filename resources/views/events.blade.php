@foreach($events as $event)
    <h3>{{ $event->name }} <small>organised by <bold>{{ $event->owner->name }}</bold></small></h3>
    <p>{{ $event->reason }}</p>
@endforeach