@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Detail</h4></div>

                <div class="card-body">

                    <h4>Judul:</h4>
                    <p>{{$data->judul}}</p>
                    <h4>Isi:</h4>
                    <p>{{$data->isi}}</p>
                    <h4>Slug:</h4>
                    <p>{{$data->slug}}</p>
                    <h4>Tag:</h4>
                    <p>{{$data->tag}}</p>

                    <div><a href="/artikel" class="btn btn-secondary" role="button">Back</a></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
