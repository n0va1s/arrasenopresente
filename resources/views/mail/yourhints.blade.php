@component('mail::message')

Oi {{$name}},

@component('mail::panel')
## Seu pedido foi:

Um presente para **{{$who_is}}**, de **{{$age_range}}** por causa **{{$occasion}}**

@endcomponent

@component('mail::button', ['url' => $url])
Clique aqui e veja as dicas que preparamos para vc
@endcomponent

Um abraço,  
Duendes do {{ config('app.name') }}
@endcomponent
