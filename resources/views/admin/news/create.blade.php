@extends('admin.layouts.index')
@section('title', 'Create News')
@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">News</h4>
                    <div class="card-tools">
                        <a href="{{ route('admin.news.index') }}" class="btn btn-danger btn-sm">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        {{-- Title --}}
                        <div class="form-group col-md-12">
                            <label for="title" class="text-dark">Title</label>
                            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                value="{{ old('title') }}" id="title" placeholder="Enter news title">
                            @error('title')
                            <div class="invalid-feedback" id="titleError">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Image --}}
                        <div class="form-group col-md-12">
                            <label for="image" class="text-dark">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image"
                                        class="custom-file-input @error('image') is-invalid @enderror" id="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                            @error('image')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <label for="content" class="text-dark">Content</label>
                            <textarea name="content" class="form-control @error('content') is-invalid @enderror"
                                rows="4" id="content">{{ old('content') }}</textarea>
                            @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection