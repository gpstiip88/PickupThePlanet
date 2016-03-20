<div id="sidebar-utente" class="col-sm-3 sfondo-bianco text-center padded-updown">
  <img id="avatar" src="{{ asset($farmer['image']) }}" alt="{{ $farmer['name'] }}-avatar" class="img-circle center-block img-responsive">
  <h2 class="text-center">{{ $farmer['name'] }}</h2>
  <h3 class="text-center">{{ $farmer['username'] }}</h3>
  <div class="row">
    <div class="col-sm-6 followers">
      <p>Followers</p>
      <span id="followers-number" class="testo-marrone testo-grande">120</span>
    </div>
    <div class="col-sm-6 following">
      <p>Following</p>
      <span id="following-number" class="testo-verde testo-grande">88</span>
    </div>
  </div>
  <div id="livello" class="row sfondo-verde padded-updown">
    <div class="col-sm-4"><span class="icone icone-semi-verde"></span></div>
    <div class="col-sm-4"><span class="icone icone-pianta-verde"></span></div>
    <div class="col-sm-4"><span class="icone icone-frutto-bianco"></span></div>
  </div>
  <div class="row sfondo-arancio padded-updown">
    <div class="col-sm-3"><span class="icone icone-foglio"></div>
    <div class="col-sm-9"><span class="testo-grande">crea evento</span></div>
  </div>
    <span class="icone icone-occhio center-block"></span>
    <h4>mi interesso a</h4>
    <p class="sfondo-verde testo-bianco testo-grande center-block text-circle">#Bio</p>
    <p class="testo-verde testo-grande">#Natura</p>
    <p class="testo-verde testo-grande">#Alimentazione</p>
    <p class="testo-verde">#cucina</p>
</div>
