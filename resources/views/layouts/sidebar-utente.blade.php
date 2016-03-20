<div id="sidebar-utente" class="col-sm-3 center-block sfondo-bianco">
  <img src="{{ asset('img/utente.jpg') }}" alt="{{ $user['name'] }}-avatar" class="img-circle img-responsive">
  <h2 class="text-center">{{ $user['name'] }}</h2>
  <h3 class="text-center">{{ $user['username'] }}</h3>
  <div class="row">
    <div class="col-sm-6 followers">
      <p>Followers</p>
      <span id="followers-number" class="testo-marrone">120</span>
    </div>
    <div class="col-sm-6 following">
      <p>Following</p>
      <span id="following-number" class="testo-verde">88</span>
    </div>
  </div>
  <div id="livello" class="row sfondo-verde">
    <div class="col-sm-4"><span class="icone icone-semi-verde"></span></div>
    <div class="col-sm-4"><span class="icone icone-pianta-verde"></span></div>
    <div class="col-sm-4"><span class="icone icone-frutto-bianco"></span></div>
  </div>
  <div class="row sfondo-arancio">
    <div class="col-sm-3"><span class="icone icone-foglio"></div>
    <div class="col-sm-9"><span>crea evento</span></div>
  </div>
  <div class="tags">
    <div class="tags-main">

    </div>
    <div class="tags-secondary">

    </div>
  </div>
</div>
