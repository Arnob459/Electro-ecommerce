@extends('admin.layouts.master')
@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Layouts/</span> Header</h4>
      @include('alart.messages')


      <form action="{{route('header.update')}}" method="POST"  enctype="multipart/form-data">
        @csrf

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Header</h5>
            </div>
            <div class="card-body">
              <form>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Welcome Text</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="welcome_text" id="welcome_text" value="{{ $main->welcome_text }}" required />
                  </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Track Text</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="track_text" id="track_text" value="{{ $main->track_text }}" required />
                    </div>
                  </div>

                <div class="row justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
    <!-- / Content -->

@endsection
