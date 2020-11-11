@extends('layouts.app')

@section('title')
  Progetti
@endsection

@section('content')
  <div class="container-lg">
    <div class="row">
      <div class="card-deck justify-content-center">

        <div class="col-xs-8 col-sm-10 col-md-6 col-lg-4">
          <div class="card mx-3 mb-4">
            <a href="https://novecent-o.github.io/html-css-digitalocean/">
              <div class="pappo">
                <img src="/img/digitalOcean.png" class="card-img-top p-3" alt="Digital Ocean">
              </div>
            </a>
            <div class="card-body">
              <h5 class="card-title">DigitalOcean</h5>
              <p class="card-text">
                Simulazione dell'homepage del noto sito DigitalOcean. Ho usato
                le tecnologie che erano in mio possesso in quel momento per
                avvicinarmi il più possibile alla home del sito originale.
              </p>
              <p class="card-text">
                <small class="text-muted">
                  HTML5 - CSS3
                </small>
              </p>
            </div>
          </div>
        </div>

        <div class="col-xs-8 col-sm-10 col-md-6 col-lg-4">
          <div class="card mx-3 mb-4">
            <a href="https://novecent-o.github.io/html-css-spotifyweb/">
              <div class="pappo">
                <img src="/img/spotifyWeb.png" class="card-img-top p-3" alt="Spotify Web">
              </div>
            </a>
            <div class="card-body">
              <h5 class="card-title">Spotify Web</h5>
              <p class="card-text">
                Realizzazione di una Web App ispirata a Spotify.
                Completamente responsive grazie anche all'utilizzo di Bootstrap.
              </p>
              <p class="card-text">
                <small class="text-muted">
                  HTML5 - CSS3 - JavaScript
                </small>
              </p>
            </div>
          </div>
        </div>

        <div class="col-xs-8 col-sm-10 col-md-6 col-lg-4">
          <div class="card mx-3 mb-4">
            <a href="https://novecent-o.github.io/js-html-css-boolzap/">
              <div class="pappo">
                <img src="/img/whatsapp.png" class="card-img-top p-3" alt="Whatsapp Web">
              </div>
            </a>
            <div class="card-body">
              <h5 class="card-title">Whatsapp Web</h5>
              <p class="card-text">
                È possibile inviare dei messaggi utilizzando il tasto Invio oppure
                cliccando sull'icona di fianco all'input; in automatico riceveremo
                una risposta random solo dopo l'avvenuta conferma di lettura del
                nostro messaggio precedente(dettata dalle due spunte blu).
                È possibile filtrare i contatti usando il campo di ricerca.
              </p>
              <p class="card-text">
                <small class="text-muted">
                  HTML5 - JavaScript - JQuery - CSS3
                </small>
              </p>
            </div>
          </div>
        </div>

        <div class="col-xs-8 col-sm-10 col-md-6 col-lg-4">
          <div class="card mx-3 mb-4">
            <a href="https://novecent-o.github.io/ajax-ex-boolflix/">
              <div class="pappo">
                <img src="/img/boolflix.png" class="card-img-top p-3" alt="Boolflix">
              </div>
            </a>
            <div class="card-body">
              <h5 class="card-title">BoolFlix</h5>
              <p class="card-text">Riproduzione del funzionamento di ricerca della
                nota società Netflix, con una chiamata Ajax ho interrogato il
                database del sito "The Movie DB" per stampare i risultati di
                ricerca corrispondenti.
              </p>
              <p class="card-text">
                <small class="text-muted">
                  JavaScript - HTML5 - CSS3 - Rest-API
                </small>
              </p>
            </div>
          </div>
        </div>

        <div class="col-xs-8 col-sm-10 col-md-6 col-lg-4">
          <div class="card mx-3 mb-4">
            <a href="https://novecent-o.github.io/boolbnb_goodluck/">
              <div class="pappo">
                <img src="/img/boolBNB.png" class="card-img-top p-3" alt="AirBnb">
              </div>
            </a>
            <div class="card-body">
              <h5 class="card-title">AirBnb</h5>
              <p class="card-text">
                Sviluppo di un’applicazione ispirata ad AirBnb.
                L'utente si può loggare, inserire un appartamento, modificarlo,
                sponsorizzarlo, visualizzare le statistiche di esso. Il sito permette di
                effettuare delle prenotazioni tramite pagamenti con carte di credito.
              </p>
              <p class="card-text">
                <small class="text-muted">
                  PHP - HTML5 - SASS - Laravel - JavaScript - JQuery - Rest-API
                </small>
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
