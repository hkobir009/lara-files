@extends('frontend.layouts.app')

@section('content')


<section class="pt-4 mb-4">
  <div class="container text-center">
      <div class="row">
          <div class="col-lg-6 text-center text-lg-left">
              <h1 class="fw-600 h4">Faq page</h1>
          </div>
          <div class="col-lg-6">
              <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                  <li class="breadcrumb-item opacity-50">
                      <a class="text-reset" href="{{ route('home') }}">{{ translate('Home')}}</a>
                  </li>
                  <li class="text-dark fw-600 breadcrumb-item">
                      <a class="text-reset" href="{{ route('faq') }}">"{{ translate('Faq') }}"</a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
</section>
<section class="mb-4">
  <div class="container">
      <div class="p-4 bg-white rounded shadow-sm overflow-hidden mw-100 text-left">
        <section class="faq mt-2">
          <div class="container">
            @foreach ($faqs as $faq)
            <div class="accordion " id="accordionExample">
              <div class="">
                
              <h2 class="mb-0 border-bottom">
                <button class="btn btn-link text-decoration-none btn-block text-left position-relative collapsed" type="button" data-toggle="collapse" data-target="#faq{{$faq->id}}" aria-expanded="false" aria-controls="collapseOne">
                  <h5>{{$faq->question}}</h5>
                </button>
              </h2>
            </div>
            <div id="faq{{$faq->id}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                {!! strip_tags($faq->answer) !!}
              </div>
            </div>
            
          </div>
          @endforeach
        </div>
          </div>
        </section>
      </div>
  </div>
</section>
@endsection
@section('script')

<script>


</script>

@endsection

