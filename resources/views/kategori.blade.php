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
                                    <h4 class="title">Kategori Table</h4>
                                    <p class="category">All Data Kategori</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table id="tabel-data" class="table">
                                        <thead class="text-primary">
                                            <th>Kategori</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $u)
                                            <tr>
                                              <td>{{ $u->KAT_NAMA }}</td>
                                              <td>{{ $u->KAT_DESC }}</td>
                                              <td>
                                                <a href="{{ route('kategori.edit', $u->KAT_ID) }}"><button class="btn btn-success">Edit</button></a>
                                                <form method="POST" action="http://api2.dev.ent.pens.ac.id/public/kategori/{{$u->KAT_ID}}">
                                                  {{ csrf_field() }}
                                                  {{ method_field('DELETE') }}
                                                  <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                              </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
