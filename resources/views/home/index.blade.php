@extends('app')

@section('content')

<div class="content">
    <div class="container">
        @include('components.alerts')
        <form action="{{ route('xml.import') }}" method="POST" class="xml-form">
            @csrf
            <button type="submit" class="btn import-btn xml-btn">Import XML data</button>
        </form>
    </div>
</div>

@endsection
