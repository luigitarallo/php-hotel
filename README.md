# PHP Hotel

## TRACCIA

- Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G

- Stampare tutti i nostri hotel con tutti i dati disponibili.
  - Prima stampate in pagina i dati, senza preoccuparvi dello stile.
  - Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

**Bonus**

1. Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
2. Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)

_Nota:_

- Deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
  Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.

## PROCEDIMENTO

**BONUS**

- Aggiungo il form nella parte inziale della pagina con due select

  1. la prima select avrà 3 option: _con parcheggio_, _senza parcheggio_, _tutto_(come valore di default)
  2. la seconda avrà 6 option: un valore di default e 1 per ogni valore voto (da 1 a 5)

- Nello script PHP controllo **SE** l'utente ha selezionato o meno un campo:

  - **SE** il campo è impostato prendo il valore selezionato **ALTRIMENTI** imposto il valore vuoto di default

- All'interno del _foreach_ per ogni hotel imposto una variabile _mostra hotel_ con valore _true_, per mostrare tutti gli hotel nel caso non sia impostato alcun filtro
- **SE** il filtro parcheggio è diverso da default (l'utente ha impostato un filtro) **E SE** l'hotel non possiede il requisito parcheggio specificato dall'utente, **ALLORA** l'hotel in questione viene nascosto (la variabile _mostra hotel_ diventa false)

- **SE** il filtro voto è diverso dal valore di default (ovvero l'utente ha selezionato qualcosa) **E** il voto dell'hotel è inferiore a quello selezionato dall'utente, **ALLORA** l'hotel in questione viene nascosto (la variabile _mostra hotel_ diventa false)

- **SE** l'hotel ha la variabile _mostra hotel_ impostata su true viene inserito nella tabella
