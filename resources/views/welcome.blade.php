{{$heading}}

@unless(count($listings) == 0)
@foreach ($listings as $l)
    <h1>Id: {{$l['id']}}</h1>
    <p>{{$l['title']}}</p>
    <p>{{$l['description']}}</p>
@endforeach

@else
    <p>Hi</p>
@endunless
