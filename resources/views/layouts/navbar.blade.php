<nav class="putp-navbar">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <a href="{{ url('/') }}"><img alt="" src="{{ asset('img/logo.png') }}"></a>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-offset-6 col-md-6">
            <form class="form-inline">
              <div class="form-group">
                <select class="form-control">
                  <option>Tutto</option>
                  <option>Eventi</option>
                  <option>Produttori</option>
                  <option>Chef</option>
                </select>
              </div>
              <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Cerca..." id="inputSuccess2" aria-describedby="inputSuccess2Status">
                <span class="icone icone-lente form-control-feedback" aria-hidden="true"></span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
