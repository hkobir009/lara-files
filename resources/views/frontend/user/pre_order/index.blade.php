@extends('frontend.layouts.user_panel')

@section('panel_content')
    <div class="aiz-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">{{ translate('Pre Order') }}</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mx-auto mb-3" >
            <div class="p-3 rounded mb-3 c-pointer text-center bg-white shadow-sm hov-shadow-lg has-transition" data-toggle="modal" data-target="#ticket_modal">
                <span class="size-70px rounded-circle mx-auto bg-secondary d-flex align-items-center justify-content-center mb-3">
                    <i class="las la-plus la-3x text-white"></i>
                </span>
                <div class="fs-20 text-primary">{{ translate('Create a PreOrder') }}</div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0 h6">{{ translate('Pre Order List')}}</h5>
        </div>
          <div class="card-body">
              <table class="table aiz-table mb-0">
                  <thead>
                      <tr>
                          <th data-breakpoints="lg">{{ translate('ID') }}</th>
                          <th data-breakpoints="lg">{{ translate('Date') }}</th>
                          <th data-breakpoints="lg">{{ translate('Descriptions') }}</th>
                          <th>{{ translate('Product Name')}}</th>
                          <th>{{ translate('Product Size')}}</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($preOrders as $key => $preOrder)
                          <tr>
                              <td>#{{ ++$key }}</td>
                              <td>{{ $preOrder->created_at }}</td>
                              <td><strong>{{ $preOrder->details }}</strong></td>
                              <td>{{ Str::limit($preOrder->product_name,75,'') }}</td>
                              <td>{{ Str::limit($preOrder->product_size,35,'') }}</td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
              <div class="aiz-pagination">
                  {{ $preOrders->links() }}
              </div>
          </div>
    </div>
@endsection

@section('modal')
<div class="modal fade" id="ticket_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="container">
        <div class="modal-dialog modal-dialog-centered mw-100" role="document">
            <div class="modal-content">
                <div class="modal-header">
                      <h5 class="modal-title strong-600 heading-5">{{ translate('Create a PreOrder')}}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body px-3 pt-3">
                      <form class="" action="{{ route('pre_order.store') }}" method="post" enctype="multipart/form-data">
                          @csrf
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>{{ translate('Your Email')}} <p class="badge text-primary">*</p></label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control mb-3" name="email" value="{{auth()->user()->email}}" required>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label>{{ translate('Phone')}} <p class="badge text-primary">*</p></label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control mb-3" value="{{auth()->user()->phone}}" name="phone" placeholder="{{ translate('Phone')}}" required>
                                </div>
                            </div>      
                          <div class="row">
                              <div class="col-md-2">
                                  <label>{{ translate('Product Name')}} <p class="badge text-primary">*</p></label>
                              </div>
                              <div class="col-md-10">
                                  <input type="text" class="form-control mb-3" name="product_name" placeholder="{{ translate('Product Name ...')}}" required>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-2">
                                  <label>{{ translate('Product Size')}}</label>
                              </div>
                              <div class="col-md-10">
                                  <input type="text" class="form-control mb-3" name="product_size" placeholder="{{ translate('Product Size ...')}}" >
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-2">
                                  <label>{{ translate('Address')}}</label>
                              </div>
                              <div class="col-md-10">
                                  <input type="text" class="form-control mb-3" name="address" placeholder="{{ translate('Enter Your Address')}}" >
                              </div>
                          </div>
    
                          <div class="row">
                              <div class="col-md-2">
                                  <label>{{ translate('Description')}}</label>
                              </div>
                              <div class="col-md-10">
                                  <textarea type="text" class="form-control mb-3" rows="3" name="details" placeholder="{{ translate('Type your descriptions')}}" data-buttons="bold,underline,italic,|,ul,ol,|,paragraph,|,undo,redo" ></textarea>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-md-2 col-form-label">{{ translate('Photo') }}</label>
                              <div class="col-md-10">
                                  <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                      <div class="input-group-prepend">
                                          <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                      </div>
                                      <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                      <input type="hidden" name="attachments" class="selected-files">
                                  </div>
                                  <div class="file-preview box sm">
                                  </div>
                              </div>
                          </div>
                          <div class="text-right mt-4">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ translate('cancel')}}</button>
                              <button type="submit" class="btn btn-primary">{{ translate('SUBMIT PRE ORDER')}}</button>
                          </div>
                      </form>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
