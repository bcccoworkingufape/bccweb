@extends("templates.app")
@section('head')
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
@endsection
@section('content')
    {{-- <div style="margin-bottom: 13px;font-size: 24px; font-weight: 700; width: 144px;">
        <a class="nav-link"href="https://www.instagram.com/bccufape/" target='_blank'>@bccufape</a>
    </div> --}}
    <script src='https://embedsocial.com/js/iframe.js'></script>
    <iframe id='feed' style='border: 0; width: 100%; height: 100%;' scrolling=no src='https://embedsocial.com/facebook_album/pro_hashtag/b0a72fca0548cf797096822b9f6168e2a963259a'></iframe>
    <script>iFrameResize();</script>
{{-- <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/cb05b3c56bd75794a7c755e0f0838b5c.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe> --}}

@endsection
