@props(['errors'])

@if ($errors->any())
    <div {{ $attributes}}>
        <div class="font-medium text-red-600">
            check errors
        </div>
        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ((array) $errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

            @if(empty($errors->first('image')))
                <li>if you had image please select again</li>
            @endif
        </ul>

    </div>
@endif
