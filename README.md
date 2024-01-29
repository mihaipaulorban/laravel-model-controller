# Laravel Movie Collection

## Descrizione

Laravel Movie Collection è una semplice applicazione backend sviluppata con il framework PHP Laravel che permette agli utenti di visualizzare una lista di film. Questo progetto dimostra l'interazione tra Laravel e un database MySQL, utilizzando l'ORM Eloquent per recuperare e mostrare i dati.

## Tecnologie Utilizzate

-   **Laravel**: framework PHP per lo sviluppo di applicazioni web seguendo il pattern architetturale MVC.
-   **MySQL**: sistema di gestione di database relazionali.
-   **PHP**: linguaggio di scripting lato server utilizzato per lo sviluppo web.
-   **SASS**: pre-processore CSS che permette di scrivere codice CSS più pulito e organizzato.

## Struttura del Progetto

Il progetto segue la struttura standard di un'applicazione Laravel:

-   `app/Models/Movie.php`: Modello Eloquent che rappresenta la tabella `movies` nel database.
-   `app/Http/Controllers/Guest/PageController.php`: Controller che gestisce le richieste alla root dell'applicazione e passa i dati dei film alla view.
-   `resources/views/home.blade.php`: View Blade che visualizza la lista dei film in un layout stilizzato con SASS.
-   `routes/web.php`: File delle rotte che definisce la rotta alla root e la collega al `PageController`.
-   `public/scss/`: Contiene il file CSS compilato da SASS.

## Percorso Logico

1. **Configurazione del Database**: Creazione di un database `laravel_model_controller` e importazione della tabella `movies` tramite phpMyAdmin.

2. **Modello Eloquent**: Creazione del modello `Movie` con il comando `php artisan make:model Movie` che rappresenta la tabella `movies` e permette l'interazione con essa.

3. **Controller**: Implementazione del `PageController` che recupera tutti i film dal database tramite Eloquent utilizzando `Movie::all()` e passa i dati alla view `home`.

4. **View Blade**: La view `home` utilizza il motore di template Blade per iterare sulla collezione di film e visualizzare le informazioni di ogni film in una card.

5. **SASS per gli Stili**: I file SASS sono organizzati in parziali e compilati in file SCSS che stilizzano l'output della view per renderlo un minimo piacevole.

6. **Routing**: Definizione della rotta nel file `web.php` che mappa l'URL della root all'azione `index` di `PageController`.
