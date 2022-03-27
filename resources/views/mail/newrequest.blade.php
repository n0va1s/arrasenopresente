@component('mail::message')

@component('mail::panel')
Responder para {{$name}} do {{$state}} no email {{$emailFrom}} 
@endcomponent

**Ocasião**: {{$occasion}}  
**Faixa de preço**: {{$priceRange}}  
**Boa ideia**: {{$goodGift}}  
**Péssina ideia**: {{$badGift}}  
**Faixa etária**: {{$ageRange}}  
**Segmento**: {{$segment}}  
**Relaxa**: {{$relax}}  
**Opção sexual**: {{$sexualOption}}  
**Signo**: {{$sign}}  
**Relação**: {{$relation}}  
**Que é**: {{$whoIs}}  
**Gosta do dia**: {{$likeDay}}  
**Gosta de animais**: {{$likeAnimal}}  
**Mais informações**: {{$moreInformation}}  

Um abraço,
{{ config('app.name') }}
@endcomponent
