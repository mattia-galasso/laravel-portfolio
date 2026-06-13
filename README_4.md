# EX - Aggiungiamo il Type

> Nome repo: `laravel-portfolio`

## Descrizione

> Continuiamo a lavorare sul nostro sito portfolio e aggiungiamo una nuova entità Type. Questa entità rappresenta la tipologia di un progetto ed è in relazione one to many con i progetti.

### Svolgimento

> I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:


> - Creiamo il modello Type, con relativa migrazione ed un seeder per inserire i types nel Database
> - Creiamo anche la migration per modificare la tabella projects, che dovrà ora contenere la chiave esterna type_id
> - Nei modelli Type e Project, aggiungiamo i metodi per definire la relazione one-to-many
> - Nella pagina di dettaglio del progetto, mostriamo il Type a cui il progetto appartiene. Volendo, potremmo anche aggiungere una colonna che indica il tipo nella tabella della pagina Index dei progetti.
> - Nei form di creazione e modifica dei progetti, dobbiamo permettere di associare un type al progetto stesso. Gestiamo inoltre il salvataggio di questa associazione progetto-tipologia nel controller ProjectController

#### Bonus

> Aggiungere le operazioni CRUD anche per il model Type, in modo da gestire le tipologie di progetto direttamente dal pannello di amministrazione.