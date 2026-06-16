# EX - Aggiungiamo la Technology

> Nome repo: `laravel-portfolio`

## Descrizione

> Completiamo il nostro portfolio inserendo anche l'entità Technology, che rappresenta i linguaggi utilizzati nei progetti e che avrà una relazione molti a molti con i progetti stessi.

### Svolgimento

> In questo esercizio dovremo svolgere i diversi step che ci permetteranno di implementare il modello Technology e la sua relazione con i progetti:

> - Creiamo il modello Technology, la migration per la sua tabella ed un seeder.
> - Sarà inoltre necessario creare la tabella pivot project_technology, per gestire la relazione molti a molti
> - Nei modelli Technology e Project, dovremo aggiungere i metodi corretti per rappresentare la relazione molti a molti
> - Nei form di creazione e modifica dei progetti, dobbiamo permettere di associare una o più tecnologie al progetto stesso. Gestiamo inoltre il salvataggio di queste associazioni progetto-tecnologie nel controller ProjectController
> - All'interno della pagina di dettaglio di un modello, dovremo visualizzare in qualche modo la lista delle tecnologie utilizzate nel singolo progetto.

#### Bonus

> - Aggiungere le operazioni CRUD anche per il modello Technology, in modo da gestire le tipologie di progetto direttamente dal pannello di amministrazione.
> - Potremmo modificare i seeder in modo tale da creare già le associazioni tra tecnologia e progetti quando viene popoliamo il database.