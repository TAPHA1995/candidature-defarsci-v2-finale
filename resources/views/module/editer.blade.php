@extends('layouts.front')

@section('content')

<div class="conatiner">
    @if (session('success'))
    <div class="alert alert-success mt-3">
        {{session('success')}}
    </div>
    @endif
    <div class="card">
        <div class="card-header bg-info text-white">Editer un module</div>
        <div class="card-body">
            <form action="{{route('update.module',$module->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <strong>Libelé :</strong>
                    <input type="text" name="libele" class="form-control my-2" value="{{ $module->libele }}">
                </div>
                <div class="row">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control my-2"></textarea>
                            <!-- <input type="text" name="description" class="form-control" > -->
                        </div>
                    </div>
                </div> 
                <div class="form-group">
                    <button class="btn btn-success mt-3">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
