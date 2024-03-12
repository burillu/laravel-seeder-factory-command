<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installazione Laravel

apro il terminale nella cartella padre e creo un nuovo progetto, in questo caso denomintato template_laravel_base:
```bash
composer create-project --prefer-dist laravel/laravel:^9.2 template_laravel_base
```
entro nella directory appena creata:
```bash
cd template_laravel_base
```
se voglio apro direttamente vs code :
```bash
code . -r
```
provare se l'installazione è andata a buon fine col comando:
```bash
php artisan serve
```
interrompere il server in esecuzione ed eseguo il seguente comando:
```bash
composer require pacificdev/laravel_9_preset
```
installo bootsrap e sass:
```bash
php artisan preset:ui bootstrap
```
```bash
npm install
```

npm install --save @fortawesome/fontawesome-free

in vite config aggiungere:

'~@fortawesome':
                path.resolve(__dirname, 'nodemodules/@fortawesome'),

copio la cartella dei webfont:


$fa-font-path: "../fonts/font-awesome" !default;



# laravel-seeder-factory-command

## Descrizione:

Dovrai realizzare un progetto utilizzando Laravel che visualizzi delle card per dei prodotti nella homepage. 

I prodotti saranno generati ed inseriti in un apposito database sulla base delle specifiche fornite ed avranno una categoria associata.

Le categorie saranno generate a partire da un file CSV.
 
### Milestone 1
Realizza un nuovo progetto Laravel. Completa lo scaffolding e la procedura di inizializzazione di un nuovo progetto. Installa SASS e Bootstrap e le altre dipendenze potenzialmente necessarie (non ci sarà bisogno di autenticazione).

### Milestone 2
Realizza le migration per le risorse. Non dimenticare: la categoria sarà necessariamente associata ad un prodotto.

Ogni prodotto sarà strutturato come di seguito:
- id
- nome
- descrizione
- immagine: url ad un’immagine del prodotto
- codice EAN: codice numerico di identificazione internazionale a 13 cifre
- prezzo
- in evidenza: stato “in evidenza” del prodotto (attivo o disattivo)
- data di creazione
- data di ultima modifica

Ogni categoria sarà strutturata come di seguito:
- id
- nome
- colore: codice esadecimale del colore

### Milestone 3
Realizza i modelli per le risorse. Non dimenticare di rappresentare la relazione esistente tra prodotti e categorie. 

Realizza poi i seeder per le risorse. 

I dati dei prodotti dovranno essere generati con Faker. Dovranno essere generati 100 prodotti fittizi, di cui solo 5 in evidenza.

I dati delle categorie dovranno essere letti direttamente dal file CSV (vedi materiale aggiuntivo).
