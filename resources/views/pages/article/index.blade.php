@extends('layouts.master')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Halaman Artikel</h1>

@if (!empty($article_list))
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Slug</th>
            <th>Tag</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php
            $count = 0;
        @endphp
        @foreach ($article_list as $article)
        <tr>
            <td>{{ $count++ }}</td>
            <td>{{ $article->judul }}</td>
            <td>{{ $article->isi }}</td>
            <td>{{ $article->slug }}</td>
            <td>{{ $article->tag}}</td>
            <td>{{ $article->created_at->format('d-m-Y') }}</td>
            <td>
                <div class="box-button">
                    {{ route('article/'.$article->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }}
                </div>

                @if (Auth::check())
                <div class="box-button">
                    {{ link_to('article/'.$article->id.'/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
                </div>

                <div class="box-button">
                    {!! Form::open(['method' => 'DELETE', 'action' => ['ArticleController@destroy', $article->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </div>
                @endif

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else:
<p>Tidak ada Artikel</p>
@endif

@endsection