<x-mail::message>
# Hi {{$data['inputName']}}
Your message about "{{$data['inputSubject']}}" has reached us.



{{$data['inputMessage']}}



Thank you, we will take care,<br>
{{ config('app.name') }}
</x-mail::message>
