@extends('admin.layout.master')
@section('content')
    <div class="row tm-content-row">
      <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-products">
          <div class="tm-product-table-container">

            @if ($message=Session::get('success'))
              <div class="alert alert-success">
                <p>{{ $message }}</p>
              </div>
            @endif

            <a href="{{ route('admin.movie.add') }}" class="btn btn-primary btn-block text-uppercase">Add new movie</a>
            <table class="table table-hover tm-table-small tm-product-table">
              <thead>
                <tr>
                  <th scope="col">&nbsp;</th>
                  <th scope="col">IMAGE</th>
                  <th scope="col">MOVIE NAME</th>
                  <th scope="col">RELEASE DATE</th>
                  <th scope="col">PRICE</th>
                  <th scope='col'>OPTION</th>
                  <th scope="col">&nbsp;</th>
                </tr>
              </thead>
              
              @foreach ($movie as $key=>$value)
              <tbody>
                <tr>
                  <th scope="col">&nbsp;</th>
                  <td>
                    <img src="{{ url('public/image/'.$value->movie_img) }}" style="height: 200px; width: 150px">
                  </td>
                  <td class="tm-product-name">{{ $value->movie_name }}</td>
                  <td>{{ $value->release_date }}</td>
                  <td>{{ $value->price }}</td>
                  <td>
                    <a href="{{ asset('movie/edit/'. $value->movie_id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Edit</a>
                    <a href="{{ asset('movie/delete/'. $value->movie_id) }}" onclick="return confirm('You sure to delete it?')" class="tm-product-delete-link">
                      <i class="far fa-trash-alt tm-product-delete-icon"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
            <!-- table container -->
          </div>
        </div>
      </div>
    </div>
@endsection