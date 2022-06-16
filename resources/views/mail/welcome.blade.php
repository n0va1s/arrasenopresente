@component('mail::message')
Oi {{$name}},

> Um pequeno lembrete:
> 1. Nossas respostas chegam em até 72 horas
> 2. Nós priorizamos produtos e serviços de empresas com presença online e com entrega em todo o país
> 3. Não contabilizamos o frete nas nossas avaliações, porque variam de cidade

@component('mail::panel')
Ah! Se gostar das nossas dicas, lembra de clicar no **gostei**, tá? Isso ajuda a nossa IA a ficar cada dia melhor :)
@endcomponent

Um abraço,  
Duendes do {{ config('app.name') }}
@endcomponent
