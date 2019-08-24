
@extends('layouts.app')

@section('app_title', 'Decrypt Base64')


@section('func_content')
      <div>
        <form action="/decrypt" method="post">
          @csrf
          <h4 class="card-title"> Input</h4>
          <div> <textarea id="input" name="input" cols ="71" rows="5"></textarea></div>
          <div><button id="encode" type="submit" class="btn btn-primary">Decode &rarr;</button></div>
          <p/>
          <h4 class="card-title"> Output</h4>
          <div> <textarea id="output" name="output" cols ="71" rows="5">{{$str}}</textarea></div>
        </form>
        <div><button class="btn btn-secondary" onclick="Copy();return;">Copy text</button></div>
      </div>
      <div class="card-body">
        <h2 class="card-title">Base 64</h2>
        <p class="card-text">
          In computer science, Base64 is a group of binary-to-text encoding schemes that represent binary data in an ASCII string format by translating it into a radix-64 representation. The term Base64 originates from a specific MIME content transfer encoding. Each Base64 digit represents exactly 6 bits of data. Three 8-bit bytes (i.e., a total of 24 bits) can therefore be represented by four 6-bit Base64 digits.
      Common to all binary-to-text encoding schemes, Base64 is designed to carry data stored in binary formats across channels that only reliably support text content. Base64 is particularly prevalent on the World Wide Web[1] where its uses include the ability to embed image files or other binary assets inside textual assets such as HTML and CSS files
        </p>
      </div>
@endsection
