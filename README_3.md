# EX - CRUD Progetto (parte 2)

> Nome repo: `laravel-portfolio`

## Descrizione

> Oggi termineremo le operazioni CRUD sui progetti, dando la possibilità all'utente di creare nuovi progetti, modificare quelli esistenti o eliminarli.

### Svolgimento

> Procediamo al completamento delle operazioni CRUD sul modello Project:
> - Prepariamo le rotte per le pagine di creazione e modifica dei progetti
> - All'interno delle pagine, prepariamo i rispettivi form
> - Nella pagina di dettaglio del progetto, mostriamo la tipologia a cui il progetto appartiene (Web Design, Graphic Design, Back End...)
> - Nel controller, inseriamo la logica per il salvataggio di un nuovo progetto, per la sua modifica e per l'eliminazione
> - Nella tabella della pagina index, dovremo inserire i pulsanti su ciascuna riga, per permettere l'eliminazione e la modifica del singolo progetto. Inoltre, potremmo avere un singolo tasto in cima che ci porti alla pagina di creazione del progetto.

#### Bonus

> Proviamo ad aggiungere un controllo: quando l'utente clicca sul pulsante "delete", chiediamo conferma della cancellazione, prima di eliminare l'elemento. Questa operazione possiamo farla a mano con JavaScript o aiutarci con i componenti Bootstrap.