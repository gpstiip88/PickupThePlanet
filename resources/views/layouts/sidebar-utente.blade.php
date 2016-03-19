<div class="col-sm-3" >
  <img src="{{ assets('public/img/'.$user['image']) }}" alt="{{ $user['name'] }}-avatar" class="img-circle center-block">
  <h2 class="text-center">{{ $user['name'] }}</h2>
  <h3 class="text-center">{{ $user['username'] }}
  <div class="row">
    <div class="col-sm-6">
      <p>Followers</p>
    </div>
    <div class="col-sm-6">
      <p>Following</p>
    </div>
  </div>
</div>
