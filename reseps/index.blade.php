@extends('layouts.app')

@section('content')
<div>
    <h1>Daftar Resep</h1>
    <a href="{{ route('reseps.pdf') }}" class="btn">Download PDF</a>
    <br>
    <br>
    <a href="{{ route('reseps.create') }}">Tambah Resep</a>
    <ul>
        @foreach($reseps as $resep)
        <li>
            <strong>{{ $resep->nama }}</strong>
            <p>{{ $resep->deskripsi }}</p>
            <a href="{{ route('reseps.edit', $resep) }}">Edit</a>
            <form action="{{ route('reseps.destroy', $resep) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </li>
        @endforeach
    </ul>
</div>
@endsection
