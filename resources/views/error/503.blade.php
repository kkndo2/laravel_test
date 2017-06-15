ccc
@extends('layouts.master')

@section('content')
    503 페이지
    {{$name}}
    <br />

    {{$name2}}

    <br />
    {{ $name3 or ''}}

    {{-- 주석 --}}

    <ul>
        @forelse($items as $item)
            <li>{{$item}}</li>
        @empty
            <li>자료없음</li>
        @endforelse
    </ul>
@php $items=[1]; @endphp
    @unless($items)
        언리스
    @else
        엘스 언리스
    @endunless
@endsection

dd


@section('content1')
   contents

@endsection