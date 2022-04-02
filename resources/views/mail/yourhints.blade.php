@component('mail::message')

@component('mail::panel')

## Seu pedido foi:

Um presente de **{{ $name}}** para **{{$who_is}}**, de **{{$age_range}}**...

@endcomponent

@component('mail::button', ['url' => $url])
Veja as dicas que preparamos para vc
@endcomponent

Um abraço,  
Duendes do {{ config('app.name') }}
@endcomponent
