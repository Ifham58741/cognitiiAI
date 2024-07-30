<x-mail::message>
{!! $email->message !!}


<x-mail::panel>
# Words: {{ $words }}
</x-mail::panel>

<x-mail::panel>
# Minutes: {{ $minutes }}
</x-mail::panel>

<x-mail::panel>
# Characters: {{ $chars }}
</x-mail::panel>

<x-mail::panel>
# Dalle Images: {{ $dalle_images }}
</x-mail::panel>

<x-mail::panel>
# SD Images: {{ $sd_images }} 
</x-mail::panel>



{!! $email->footer !!}
</x-mail::message>
