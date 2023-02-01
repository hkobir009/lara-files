@extends('backend.layouts.app')
@section('content')
<div class="aiz-titlebar text-left mt-2 mb-3">
	<div class="row align-items-center">
		<div class="col">
			<h1 class="h3">{{ translate('Add New Faq') }}</h1>
		</div>
	</div>
</div>
<div class="card">
	<form action="{{ route('website.faq.store') }}" method="POST">
		@csrf
		<div class="card-header">
			<h6 class="fw-600 mb-0">{{ translate('Faq Content') }}</h6>
		</div>
		<div class="card-body">
			<div class="form-group row">
				<label class="col-sm-2 col-from-label" for="name">{{translate('Question')}} <span class="text-danger">*</span></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="{{translate('Question')}}" name="question" required>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-from-label" for="name">{{translate('Add Answer')}} <span class="text-danger">*</span></label>
				<div class="col-sm-10">
					<textarea
						class="aiz-text-editor form-control"
						data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]'
						placeholder="Answer.."
						data-min-height="300"
						name="answer"
						required
					></textarea>
				</div>
			</div>
			<div class="text-right">
				<button type="submit" class="btn btn-primary">{{ translate('Save Page') }}</button>
			</div>
		</div>
	</form>
</div>
@endsection
