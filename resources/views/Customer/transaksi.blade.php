<title>Transaksi Customer</title>

<x-dashboard-layout>
      <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <div class="header-button">
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#">{{Auth::user()->name}}</a>
                                                    <a href="#">{{Auth::user()->role->nama_role}}</a>
                                                </h5>
                                                <span class="email">{{Auth::user()->email}}</span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <form action="/" method="POST">
                                                        @csrf                                                    
                                                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin keluar?')">
                                                        <i class="zmdi zmdi-money-box"></i>
                                                            Logout
                                                        </button>
                                                    </form>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main content -->
        <div class="main-content">
          @if ($message = Session::get('success'))
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                <span class="badge badge-pill badge-success">Success</span>
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          @endif
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                      <div class="col">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">
                              Data Transaksi
                            </h3>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Nama </th>
                                    <th>Tanggal</th>
                                    <th>Total</th>
                                    <th>Status Orderan</th>
                                    <th>Status Pembayaran</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                @foreach ($detail as $item)
                                <tbody>
                                    <tr>
                                      <td>
                                        {{ $item->no_invoice }}
                                      </td>
                                      <td>
                                        {{$item->nama_pelanggan}}
                                      </td>
                                      <td>
                                        {{$item->created_at->format('d/m/Y')}}
                                      </td>
                                      <td>
                                        {{$item->subtotal}}
                                      </td>
                                      <td>
                                        {{$item->status_order}}
                                      </td>
                                      <td>
                                        {{$item->status_pembayaran}}
                                      </td>
                                      <td>
                                        <a href="{{route('detailtransaksi', $item->id)}}">
                                        <button type="button" class="btn btn-info mb-1" >
                                          Detail
                                        </button></a>
                                        {{-- <form action="{{ route('selesai', $item->id) }}" method="POST">
                                          @method('PUT')
                                          @csrf
                                          <button type="submit" class="btn btn-primary mb-1">
                                            Selesai
                                          </button>
                                        </form>                                            --}}
                                        {{-- <form action="{{route('transaksi.destroy', $item->id)}}" method="POST" enctype="multipart/form-data">
                                          @method('DELETE')
                                          @csrf
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                          <i class="zmdi zmdi-delete"></i>
                                        </button> --}}
                                      </td>
                                    </tr>
                                  </tbody>
                                @endforeach
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
</x-dashboard-layout>
