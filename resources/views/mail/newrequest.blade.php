@component('mail::message')

@component('mail::panel')
Responder para {{$name}} no email {{$emailFrom}} 
@endcomponent

**Ocasião**: {{$occasion}}  
**Faixa de preço**: {{$priceRange}}  
**Faixa etária**: {{$ageRange}}  
**Signo**: {{$sign}}  
**Hobby**: {{$hobby}}  
**Relação**: {{$relation}}  
**Que é**: {{$whoIs}}  
**Mais informações**: {{$moreInformation}}  

Um abraço,
{{ config('app.name') }}
@endcomponent
