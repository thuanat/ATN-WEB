@extends('admin.layout.master')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Add Movie</h1>
        <br>
      </div>
    </div><!--/.row-->

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input!
            <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-xs-12 col-md-5 col-lg-5">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <form action="{{ route('admin.movie.add') }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <fieldset>
                            <div>
                                @csrf                
                                <label>Name:</label>
                                <input type="text" class="form-control" name="movie_name"
                                        placeholder="Movie Name">
                                <br>
                                <label>Release Date:</label>
                                <input type="text" class="form-control" name="release_date"
                                        placeholder="Release Date">
                                <br>
                                <label>Director:</label>
                                <input type="text" class="form-control" name="director"
                                placeholder="Director">
                                <br>
                                <label>Main Charecter:</label>
                                <input type="text" class="form-control" name="main_character"
                                placeholder="Main Character">
                                <br>
                                <label>Price</label>
                                <input type="text" class="form-control" name="price"
                                placeholder="Price">
                                <br>
                                <label>Description:</label>
                                <textarea class="form-control" name="movie_description"
                                style="width: 140%" placeholder="Movie Descrption"></textarea>
                                <br>
                                <label>Image:</label>
                                <input type="file" class="form-control" name="movie_img">
                                <br>
                                <label>Category:</label>
                                <select name="category_id" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                                <br>
                            </div>
                        </fieldset>
                        <button class="btn btn-primary btn-block text-uppercase mb-3" type="submit">
                            Add new Movie
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div><!--/.main-->
@endsection