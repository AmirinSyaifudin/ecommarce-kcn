@extends('layouts.purple')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">DATA MEDIA PROFILE</h4> <br>
                    <form class="forms-sample" action="{{ route('link.update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Youtube Channel</label>
                            <input type="text" name="url_marketplase" class="form-control" id="exampleInputName1"
                                placeholder="Url Marketplase" value="{{ old('url_marketplase', $data->url_marketplase) }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Akun Instagram</label>
                            <input type="text" name="url_wa" class="form-control" id="exampleInputName1"
                                placeholder="Instagram" value="{{ old('url_wa', $data->url_wa) }}">
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Update Data</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
