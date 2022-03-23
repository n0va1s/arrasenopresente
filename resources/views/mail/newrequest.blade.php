@component('mail::message')

@component('mail::panel')
Responder para {{$name}} do {{$state}} no email {{$emailFrom}} 
@endcomponent

id: {{$id}}
name: {{$name}}
email: {{$emailFrom}}
state: {{$state}}
occasion: {{$occasion}}
priceRange: {{$priceRange}}
goodGift: {{$goodGift}}
badGift: {{$badGift}}
ageRange: {{$ageRange}}
segment: {{$segment}}
relax: {{$relax}}
sexualOption: {{$sexualOption}}
sign: {{$sign}}
isWoman: {{$isWoman}}
likeDay: {{$likeDay}}
likeAnimal: {{$likeAnimal}}
moreInformation: {{$moreInformation}}

{{ config('app.name') }}
@endcomponent
