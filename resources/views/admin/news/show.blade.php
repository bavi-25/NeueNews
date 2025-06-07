@extends('admin.layouts.index')
@section('title', 'News Details')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">News</h4>
                <div class="card-tools">
                    <a href="{{ route('admin.news.index') }}" class="btn btn-danger btn-sm">Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="text-center mb-3">
                            <h4>{{ $news->title }}</h4>
                        </div>
                        <div class="text-center mb-3">
                            <img src="{{ Storage::url('news/'.$news->image) }}" alt="" class="img-fluid"
                                style="max-height: 300px; object-fit: cover; border-radius: 8px;">
                        </div>
                        <p class="text-justify">{{ $news->content }}</p>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <a href="{{ route('admin.news.edit', $news->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('admin.news.destroy', $news->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection