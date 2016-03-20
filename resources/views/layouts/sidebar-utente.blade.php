<div id="sidebar-utente" class="col-sm-3 center-block">
  <img src="{{ asset('img/utente.jpg') }}" alt="{{ $user['name'] }}-avatar" class="img-circle img-responsive">
  <h2 class="text-center">{{ $user['name'] }}</h2>
  <h3 class="text-center">{{ $user['username'] }}</h3>
  <div class="row">
    <div class="col-sm-6 followers">
      <p>Followers</p>
      <span id="followers-number">120</span>
    </div>
    <div class="col-sm-6 following">
      <p>Following</p>
      <span id="following-number">88</span>
    </div>
  </div>
</div>
