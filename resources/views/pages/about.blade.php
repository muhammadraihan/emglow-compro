@extends('frontend.emglow')

@section('title')
    Tentang eMGlow Aesthetic Centre
@endsection

@section('content')
    <div class="about-section">
        @foreach ($about as $item)
            <h1>Visi</h1>
            <p>{!! $item->visi !!}</p>
            <h1>Misi</h1>
            <p>{!! $item->misi !!}</p>
            <h1>Sejarah</h1>
            <p>{!! $item->sejarah !!}</p>
            <p>No.telephone</p>
            <p>{{ $item->no_tlp }}</p>
            {{ asset('photo/' . $item->photo) }}
        @endforeach
    </div>
@endsection
