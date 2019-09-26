<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('partials.services')
    <ul>
    {{-- @foreach ($links as $link)
    <li>
        <a href="{{route('pages',$link->id)}}">{{$link->link}}</a>

        @if($link->sub_links)
        <ul>
        @foreach($link->sub_links as $sub_link)
        <li>
            <a href="{{route('sub_pages',$sub_link->id)}}">{{$sub_link->sub_link}}</a>
        </li>
        @endforeach
        </ul>
        @endif
    </li>
    @endforeach --}}
    </ul>
</body>
</html>