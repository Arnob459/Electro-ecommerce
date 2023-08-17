@extends('admin.layouts.master')
@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Layouts/</span> Voucher</h4>
    @include('alart.messages')

      <div class="card">
        <h5 class="card-header">Promotion Information</h5>

        <nav class="navbar navbar-example navbar-expand-lg ">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbar-ex-3">
                  <a class="btn btn-outline-primary" href="{{ route('promotion.create') }}">+ Add New</a>
              </div>
            </div>
          </nav>

        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead class="table-light">
              <tr>
                <th>Image</th>
                <th>Link</th>
                <th>Actions</th>


              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($promotions as $promotion)
              <tr>

                <td>
                    <img style="height: 10vh" src="{{url($promotion->picture)}}" alt="picture">
                </td>
                <td>{{ $promotion->title }}</td>

                <td>
                    <a href="{{ route('promotion.edit', $promotion->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('promotion.delete', $promotion->id) }}" class="btn btn-warning">Delete</a>

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
