@props(['message'])

@if(isset($message))
<div class="border px-4 py-3 rounded relative bg-green-100 border-red-400 text-green-700">
    {{$message}}
</div>
@endif