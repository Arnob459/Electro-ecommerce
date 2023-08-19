@extends('admin.layouts.master')
@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Layouts/</span> Contact</h4>
    @include('alart.messages')




      <!-- Basic Layout & Basic with Icons -->
      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Contact </h5>
            </div>
            <div class="card-body">
                <form action="{{route('contact.update')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Footer Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="footer_title" id="footer_title" value="{{ $main->footer_title }}" required />
                  </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Contact Title</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="contact_title" id="contact_title" value="{{ $main->contact_title }}" required />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Mobile Number</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="contact_phone" id="contact_phone" value="{{ $main->contact_phone }}" required />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Address Title</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="contact_address_title" id="contact_address_title" value="{{ $main->contact_address_title }}" required />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Address</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="contact_address" id="contact_address" value="{{ $main->contact_address }}" required />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Copyright</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="copyright" id="copyright" value="{{ $main->copyright }}" required />
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


      <div class="card">
        <h5 class="card-header">Link Information</h5>

        <nav class="navbar navbar-example navbar-expand-lg ">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbar-ex-3">
                  <a class="btn btn-outline-primary" href="{{ route('link.create') }}">+ Add New</a>
              </div>
            </div>
          </nav>

        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                  <tr>
                    <th>Icon</th>
                    <th>Link</th>
                    <th>Actions</th>

                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  @foreach ($links as $link)
                  <tr>

                    <td>{{ $link->icon }}</td>
                    <td>{{ $link->link }}</td>
                    <td>
                        <a href="{{ route('link.edit', $link->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('link.delete', $link->id) }}" class="btn btn-warning">Delete</a>

                    </td>
                  </tr>

                  @endforeach

                </tbody>
              </table>
        </div>
      </div>


    </div>
    <!-- / Content -->





@endsection
