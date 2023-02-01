@extends('backend.layouts.app')

@section('content')
<div class="aiz-titlebar text-left mt-2 mb-3">
	<div class="row align-items-center">
		<div class="col">
			<h1 class="h3">{{ translate('Website Pages') }}</h1>
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h6 class="mb-0 fw-600">{{ translate('All Faqs') }}</h6>
		<a href="{{ route('website.faq.create') }}" class="btn btn-primary">{{ translate('Add New Faq') }}</a>
	</div>
	<div class="card-body">
		<table class="table aiz-table mb-0">
        <thead>
            <tr>
                <th data-breakpoints="lg">#</th>
                <th>{{translate('Questions')}}</th>
                <th data-breakpoints="md">{{translate('Answer')}}</th>
                <th class="text-right">{{translate('Actions')}}</th>
            </tr>
        </thead>
        <tbody>
        	@foreach (\App\Models\Faq::all() as $key => $faq)
        	<tr>
        		<td>{{ $key+1 }}</td>

        		<td>{{ Str::limit($faq->question, 40, '')}}</td>
				<td>{!! Str::limit(strip_tags($faq->answer), 80, '') !!}</td>

        		<td class="text-right">
	          			<a href="{{route('website.faq.edit', [$faq->id, 'lang'=>config('custom.default_language')] )}}" class="btn btn-icon btn-circle btn-sm btn-soft-primary" title="Edit">
							<i class="las la-pen"></i>
						</a>
          				<a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{ route('website.faq.destroy', [$faq->id])}}" title="{{ translate('Delete') }}">
          					<i class="las la-trash"></i>
          				</a>
						{{-- <form class="confirm-delete" action="{{ route('website.faq.destroy', $faq->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm" title="{{ translate('Delete') }}">
								<i class="las la-trash"></i>
							</a>
                        </form> --}}
        		</td>
        	</tr>
        	{{-- <tr>
        		<td>{{ $key+1 }}</td>

				@if($page->type == 'home_page')
        			<td><a href="{{ route('custom-pages.show_custom_page', $page->slug) }}" class="text-reset">{{ $page->getTranslation('title') }}</a></td>
					<td>{{ route('home') }}</td>
				@else
        			<td><a href="{{ route('custom-pages.show_custom_page', $page->slug) }}" class="text-reset">{{ $page->getTranslation('title') }}</a></td>
					<td>{{ route('home') }}/{{ $page->slug }}</td>
				@endif

        		<td class="text-right">
					@if($page->type == 'home_page')
						<a href="{{route('custom-pages.edit', ['id'=>$page->slug, 'lang'=>config('custom.default_language'), 'page'=>'home'] )}}" class="btn btn-icon btn-circle btn-sm btn-soft-primary" title="Edit">
							<i class="las la-pen"></i>
						</a>
					@else
	          			<a href="{{route('custom-pages.edit', ['id'=>$page->slug, 'lang'=>config('custom.default_language')] )}}" class="btn btn-icon btn-circle btn-sm btn-soft-primary" title="Edit">
							<i class="las la-pen"></i>
						</a>
					@endif
					@if($page->type == 'custom_page')
          				<a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{ route('custom-pages.destroy', $page->id)}} " title="{{ translate('Delete') }}">
          					<i class="las la-trash"></i>
          				</a>
					@endif
        		</td>
        	</tr> --}}
        	@endforeach
        </tbody>
    </table>
	</div>
</div>
@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection
