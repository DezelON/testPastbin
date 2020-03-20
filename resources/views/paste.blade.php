@component('header')
@endcomponent
        <div id="main_frame">
            <div id="content_frame">
                <listpastes-component :pastes = "{{$data["pastes"]}}"></listpastes-component>
                <div id="content_left">
                    <div class="content_title" style="1200px; text-align: center;">
                        {{$data["paste"]->title}}
                    </div>
                    <div>
                        <textarea disabled id="paste_code" class="paste_textarea">{{$data["paste"]->code}}</textarea>
                    </div>
                </div>
            </div>
        </div>
@component('footer')
@endcomponent