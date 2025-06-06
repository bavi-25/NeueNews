@extends('admin.layouts.index')
@section('title', 'News List')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">News</h4>
				<div class="card-tools">
					<a href="{{ route('admin.news.create') }}" class="btn btn-primary btn-sm">Create News</a>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="example" class="display" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Title</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($news as $item)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $item->title }}</td>
								<td class="text-center">
									<a href="{{ route('admin.news.show', $item->id) }}"
										class="btn btn-info btn-sm">Detail</a>
								</td>
							</tr>
							@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection