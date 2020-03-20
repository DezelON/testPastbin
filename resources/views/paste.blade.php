<html>
    <head>
        <link href="{{asset('css/index.css')}}" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div id="main_frame">
            <div id="content_frame">
                <listpastes-component :pastes = "{{$data["pastes"]}}"></listpastes-component>
                <div id="content_left">
                    <span class="content_title no_border" style="min-width: 1100px; width: 1200px; text-align: center;">
                        {{$data["paste"]->title}}
                    </span>
                    <div>
                        <textarea disabled id="paste_code" class="paste_textarea">{{$data["paste"]->code}}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{asset('js/app.js')}}" ></script>
        <script src="{{asset('js/index.js')}}"></script>
    </body>
</html>