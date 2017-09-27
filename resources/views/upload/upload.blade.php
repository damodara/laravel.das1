@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Загрузка файлов</div>

                    <div class="panel-body">
                        <form action="{{ route('upload.file') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="file" name="files"><br>
                            <input type="submit" class="btn btn-info" value="Upload">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection