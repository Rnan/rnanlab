
@extends('layouts.app')

@section('app_title', 'Barcode generator')


@section('func_content')
      <div>
        <form action="/do_barcode" method="post">
          @csrf
          <h4 class="card-title text-center"> Input</h4>
          <div> <textarea id="input" name="input" cols ="71" rows="5"></textarea></div>
          <div>
            <select name="opt_type">
              <option>C39</option>
              <option>C39+</option>
              <option>C39E</option>
              <option>C39E+</option>
              <option>C93</option>
              <option>S25</option>
              <option>S25+</option>
              <option>I25</option>
              <option>I25+</option>
              <option>C128</option>
              <option>C128A</option>
              <option>C128B</option>
              <option>C128C</option>
              <option>EAN2</option>
              <option>EAN5</option>
              <option>EAN8</option>
              <option>EAN13</option>
              <option>UPCA</option>
              <option>UPCE</option>
              <option>MSI</option>
              <option>MSI+</option>
              <option>POSTNET</option>
              <option>PLANET</option>
              <option>RMS4CC</option>
              <option>KIX</option>
              <option>IMB</option>
              <option>CODABAR</option>
              <option>CODE11</option>
              <option>PHARMA</option>
              <option>PHARMA2T</option>
            </select>
            <input name="opt_size" type="text" value="{{ $opt_size }}" width="20" />
            <button type="submit" class="btn btn-primary">Generate Barcode &rarr;</button>
          </div>
          <p/>
          <h4 class="card-title text-center"> Output </h4>
          <div class="visible-print text-center">
          	<a href="{{ $view_path }}" download="barcode.png" ><img src="{{ $view_path }}" /></a>
          </div>
        </form>

      </div>
      <div class="card-body">
        <h2 class="card-title">Barcode</h2>
        <p class="card-text">
          A barcode (also spelled bar code) is a method of representing data in a visual, machine-readable form. Initially, barcodes represented data by varying the widths and spacings of parallel lines. These barcodes, now commonly referred to as linear or one-dimensional (1D), can be scanned by special optical scanners, called barcode readers. Later, two-dimensional (2D) variants were developed, using rectangles, dots, hexagons and other geometric patterns, called matrix codes or 2D barcodes, although they do not use bars as such. 2D barcodes can be read or deconstructed using application software on mobile devices with inbuilt cameras, such as smartphones.
        </p>
        <p class="card-text">
          The barcode was invented by Norman Joseph Woodland and Bernard Silver and patented in the US in 1951 (US Patent 2,612,994). The invention was based on Morse code[1] that was extended to thin and thick bars. However, it took over twenty years before this invention became commercially successful. An early use of one type of barcode in an industrial context was sponsored by the Association of American Railroads in the late 1960s. Developed by General Telephone and Electronics (GTE) and called KarTrak ACI (Automatic Car Identification), this scheme involved placing colored stripes in various combinations on steel plates which were affixed to the sides of railroad rolling stock. Two plates were used per car, one on each side, with the arrangement of the colored stripes encoding information such as ownership, type of equipment, and identification number.[2] The plates were read by a trackside scanner, located for instance, at the entrance to a classification yard, while the car was moving past.[3] The project was abandoned after about ten years because the system proved unreliable after long-term use.
        </p>
      </div>
@endsection
