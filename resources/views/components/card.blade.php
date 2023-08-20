<div>
    @foreach($sections as $section)
        <div style="border: 1px solid blue; padding: 2em; margin: 2em;">
            @foreach($section as $component)
                {!! $component->render() !!}
            @endforeach
        </div>
    @endforeach
</div>
