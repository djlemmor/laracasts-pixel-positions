@props(['employer', 'width' => 90])

<img src="{{ Storage::url($employer->logo) }}" alt="employer logo" class="rounded-xl" width="{{ $width }}">