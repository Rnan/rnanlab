
@extends('layouts.app')

@section('app_title', 'Online Service')


@section('func_content')
      <div>
        <div class="visible-print text-center">
        	{!! QrCode::size(100)->generate(Request::url()); !!}
        	<p>Scan me to return to the original page.</p>
        </div>
      </div>
      <div class="card-body">
        <h2 class="card-title">Free online services</h2>
        <p class="card-text">

        </p>
      </div>
@endsection
