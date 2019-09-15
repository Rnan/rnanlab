
@extends('layouts.app')

@section('app_title', 'QRCode generate')


@section('func_content')
      <div>
        <form action="/do_qrcode" method="post">
          @csrf
          <h4 class="card-title text-center"> Input</h4>
          <div> <textarea id="input" name="input" cols ="71" rows="5"></textarea></div>
          <div>
            <select name="opt_encoding">
              @foreach($encodingItems as $item)
                <option value="{{ $item->code }}">{{ $item->code }}</option>
              @endforeach
            </select>
            <input id="opt_size" type="text" value="100" width="20" />
            <button type="submit" class="btn btn-primary">Generate QRCode &rarr;</button>
          </div>
          <p/>
          <h4 class="card-title text-center"> Output</h4>
          <div class="visible-print text-center">
          	<img src="temp/qrcodes/qrcode.png" width="200" />
          </div>
        </form>

      </div>
      <div class="card-body">
        <h2 class="card-title">QRCode</h2>
        <p class="card-text">
          QR code (abbreviated from Quick Response Code) is the trademark for a type of matrix barcode (or two-dimensional barcode) first designed in 1994 for the automotive industry in Japan. A barcode is a machine-readable optical label that contains information about the item to which it is attached. In practice, QR codes often contain data for a locator, identifier, or tracker that points to a website or application. A QR code uses four standardized encoding modes (numeric, alphanumeric, byte/binary, and kanji) to store data efficiently; extensions may also be used.[1]

          The Quick Response system became popular outside the automotive industry due to its fast readability and greater storage capacity compared to standard UPC barcodes. Applications include product tracking, item identification, time tracking, document management, and general marketing.[2]

          A QR code consists of black squares arranged in a square grid on a white background, which can be read by an imaging device such as a camera, and processed using Reed–Solomon error correction until the image can be appropriately interpreted. The required data is then extracted from patterns that are present in both horizontal and vertical components of the image.
        </p>
      </div>
@endsection
