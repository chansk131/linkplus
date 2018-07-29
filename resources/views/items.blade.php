@extends('layouts.app')

@section('content')

<div class="col-md-3">
        <div class="card mb-3 box-shadow">
          <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">
              <a href="/items/">
              </a>
            </p>
            <p class="card-text"></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
              </div>
            <small class="text-muted"></small>
            </div>
          </div>
        </div>
      </div>


@endsection