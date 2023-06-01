<title>Edit Transaksi</title>

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
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                      <div class="col col-md-8 mb-2">
                        <div class="card">
                          <div class="card-header">
                            {{-- @foreach ($data as $item) --}}
                            <h3 class="card-title">{{$data2->nama_pelanggan}}</h3>
                            {{-- @endforeach --}}
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>Nama Menu</th>
                                    <th>Qty</th>            
                                    <th>Sub Total</th>
                                    <th>Diskon</th>
                                  </tr>
                                </thead>
                                {{-- @foreach ($data2 as $item) --}}
                                <tbody>
                                  <tr>                                      
                                      <td>
                                        @foreach ($data2->menu as $item2)
                                        <li>{{$item2[0]}}</li>
                                        @endforeach
                                      </td>
                                      <td>
                                        @foreach ($data2->menu as $item2)
                                        <li>{{$item2[1]}}</li>
                                        @endforeach
                                      </td>
                                    <td>{{$data2->subtotal}}</td>
                                    <td>{{$data2->diskon}}</td>
                                  </tr>                                  
                                </tbody>
                                {{-- @endforeach --}}
                              </table>
                            </div>
                          </div>
                          </form>
                          <div class="card-footer">
                            <a href="{{route('transaksi.index')}}" class="btn btn-sm btn-danger">Kembali</a>
                          </div>
                        </div>
                      </div>
                      <div class="col col-lg-4 col-md-4">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">Ringkasan</h3>
                          </div>
                          <div class="card">
                              <table class="table">
                                  @csrf
                                <tbody>                 
                                  <tr>
                                    <td>
                                      No.inv
                                    </td>
                                    <td>
                                      {{ $data2->no_invoice }}
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Status Order
                                    </td>
                                    <td>
                                      {{$data2->status_order}}
                                    </td>
                                  </tr>
                                    <td>
                                    </td>
                                    @if (Auth::user()->role_id==3)
                                    <td>
                                      <a href="{{route('cetak', $data2->id)}}">
                                      <button type="submit" class="btn btn-primary">Cetak Struk</button>
                                    </td>
                                    @endif
                                </tbody>
                                </form>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
          </div>
      </div>
</x-dashboard-layout>
