@extends('layouts.app')

@section('content')
    @php
        use Prismic\Dom\RichText;
    @endphp
    {{ RichText::asText($document->data->description) }}
@endsection
