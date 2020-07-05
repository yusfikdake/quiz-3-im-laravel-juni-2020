@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>Artikel</h4></div>
                    <div class="card-body">
                        <div><a href="/artikel/create" class="btn btn-secondary" role="button">Create</a></div>
                            <br/>
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Isi</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Tag</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 0;?>
                        @foreach($data as $nilai)
                            <?php $no++ ;?>
                                <tr>
                                <td>{{ $no }}</td>
                                <td>{{$nilai->judul}}</td>
                                <td>{{$nilai->isi}}</td>
                                <td>{{$nilai->slug}}</td>
                                <td>{{$nilai->tag}}</td>
                                <td>

                                <form action="/artikel/{{$nilai->id}}" method="POST">
                                <a href="/artikel/{{$nilai->id}}">Detail </a>   |
                                <a href="/artikel/{{$nilai->id}}/edit">Edit </a>   |
                                    {{ method_field('delete') }}
                                    @csrf
                                <button class="btn btn-xs btn-link" type="submit">Delete</button>
                                </form>
                                </td>
                                </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection