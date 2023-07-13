<title>Laporan Penjualan</title>

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
      <div class="main-content">
        <div class="section__content section__content--p30">
          <div class="container-fluid">
          <div class="row">
            <div class="col">
              {{-- <div class="card card-primary card-outline"> --}}
                <div class="card-header">
                    <h3 class="card-title">Laporan Penjualan</h3>
                  </div>
                  @if (Auth::User()->role->nama_role=='Admin')
                  <div class="card-footer">
                    <a href="{{ route('laporan.index') }}" class="btn btn-sm btn-danger">
                      Tutup
                    </a>
                  </div>
                  @endif
                  <div class="card-body">
                    {{-- <h3 class="text-center">Periode Bulan Januari 2021</h3> --}}
                    <div class="row">
                      <div class="col col-lg-4 col-md-4">
                        <h4 class="text-center">Ringkasan penjualan</h4>
                        <table class="table table-bordered">
                          <tbody>
                            <tr>
                              <td>Total Terjual</td>
                              <td>{{$totalqty}} Menu</td>
                            </tr>
                            <tr>
                              <td>Total Transaksi</td>
                              <td>{{$totalpenjualan}} Transaksi</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col col-lg-8 col-md-8">
                        <h4 class="text-center">Rincian Penjualan</h4>
                        <div class="table-responsive table-data">
                          <table class="table table-stripped"  id="data_user">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Invoice</th>
                                <th>Tanggal</th>
                                <th>Nama Menu</th>
                                <th>Qty</th>
                                {{-- <th>Total</th> --}}
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($penjualan as $item) 
                              <tr>
                                <td>
                                  {{ $loop->iteration }}
                                </td>
                                <td>
                                  {{ $item->no_invoice }}
                                </td>
                                <td>
                                  {{$item->created_at->format('d/m/Y')}}
                                </td>
                                <td>
                                  @foreach ($item->menu as $item2)
                                    <li>{{$item2[0]}}</li>
                                  @endforeach
                                </td>
                                <td>
                                  @foreach ($item->menu as $item2)
                                    <li>{{$item2[1]}}</li>
                                  @endforeach                                
                                </td>
                                {{-- <td>127.000</td> --}}
                              </tr>
                              @endforeach                              
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
              {{-- </div> --}}
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
</x-dashboard-layout>