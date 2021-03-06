<!doctype html>
<html lang="en">

<head>
@include('include.head')
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="{!! asset('assets/img/sidebar-1.jpg')!!}">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="" class="simple-text">
                    ENT
                </a>
            </div>
@include('include.side')
        </div>
        <div class="main-panel">
          <div class="content">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="card">
                              <div class="card-header" data-background-color="purple">
                                  <h4 class="title">Insert PENS TV Data</h4>
                                  <p class="category">Write PENS TV Data</p>
                              </div>
                              <div class="card-content">
                                  <form action="http://api2.dev.ent.pens.ac.id/public/penstv" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('post')}}

                                      <div class="row">
                                          <div class="col-md-4">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Nama PENS TV</label>
                                                  <input name="TV_NAMA" type="text" class="form-control" required>
                                                  <input name="USER_ID" value="{{ session()->get('activeUser')->USER_ID }}" type="hidden" class="form-control" required>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">PENS TV LINK</label>
                                                  <input name="TV_LINK" type="text" class="form-control" required>
                                              </div>
                                          </div>
                                          <div class="col-md-2">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Tanggal Rilis</label>
                                                  <input name="TV_TGL_RILIS" type="date" class="form-control" required>
                                              </div>
                                          </div>
                                          <div class="col-md-2">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Kategori</label>
                                                  <select name="KAT_ID">
                                                      @foreach($data as $u)
                                                      <option value="{{ $u->KAT_ID }}">{{ $u->KAT_NAMA }}</option>
                                                      @endforeach
                                                  </select>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label>Deskripsi PENS TV</label>
                                                  <div class="form-group label-floating">
                                                      <textarea name="TV_DESC" class="form-control" rows="5"></textarea>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <button type="submit" class="btn btn-primary pull-right">Insert</button>
                                      <div class="clearfix"></div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
</body>

@include('include.footer')

</html>
