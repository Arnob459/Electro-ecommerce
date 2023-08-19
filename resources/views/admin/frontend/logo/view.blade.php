@extends('admin.layouts.master')
@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Layouts/</span> Genaral</h4>
      @include('alart.messages')


      <form action="{{route('logo.update')}}" method="POST"  enctype="multipart/form-data">
        @csrf

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Genaral </h5>
            </div>
            <div class="card-body">
              <form>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Website Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="site_name" id="site_name" value="{{ $main->site_name }}" required />
                  </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Logo</label>
                    <div class="col-sm-10">
                        <img style="height:100px" src="{{url($main->logo) }}" class="img-thumbnail"> <br>
                        <label >Supported files: jpeg, jpg, png.</label>
                        <input type="file" class="form-control" name="logo" />
                    </div>
                  </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Favicon</label>
                    <div class="col-sm-10">
                        <img style="height:30vh" src="{{url($main->favicon) }}" class="img-thumbnail"> <br>
                        <label >Supported files: jpeg, jpg, png,ico.</label>
                        <input type="file" class="form-control"  name="favicon" />
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
