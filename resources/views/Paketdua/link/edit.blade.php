@extends('layouts.purple')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">DATA LINK </h4> <br>
                    <form class="forms-sample" action="{{ route('linkpaketdua.update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">URL MARKETPLASE</label>
                            <input type="text" name="url_marketplase" class="form-control" id="exampleInputName1"
                                placeholder="url marketplase" value="{{ old('url_marketplase', $data->url_marketplase) }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">URL WHATSAPP</label>
                            <input type="text" name="url_wa" class="form-control" id="exampleInputName1"
                                placeholder="Instagram" value="{{ old('url_wa', $data->url_wa) }}">
                        </div>

                        <div class="control-group">
                            <label class="control-label">Itenerary</label>
                            <div class="controls controls-row">
                                <input type="time" name="waktu[]" id="text1"
                                    class="span3 input-tooltip" data-original-title="Jam"
                                    data-placement="bottom" required />
                                <label class="control-label"
                                    style="margin-right: 8px; width:15px"><b>&#8211;</b></label>
                                <textarea type="text" name="kegiatan[]" id="text1" class="span6 input-tooltip"
                                    data-original-title="Masukkan kegiatan" data-placement="bottom" placeholder="kegiatan" rows="2" required></textarea>
                                <button type="button"
                                    class="btn waves-effect waves-light btn-primary btn-outline-primary btn-small"
                                    style="border-radius: 10px; margin-left: 8px; height: 48px"
                                    id="dynamic-ar"><i class="fas fa-plus-circle"></i></button>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-gradient-primary mr-2">Update Data</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
