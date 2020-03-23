@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <ul>
                @forelse($groups as $group)
                <li>{{ $group }}</li>
                @empty
                <li>Mevcut bir sınıfa sahip değilsiniz</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection
