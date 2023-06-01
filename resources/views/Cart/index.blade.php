<title>Cart</title>

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
        <!-- MAIN CONTENT-->
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
                        <div class="col-md-12">
                            <div class="card-header">
                                <h2>Order</h2>
                                <div class="card-body">
                                    <form method="post" action="{{route('Cart.store')}}" enctype="multipart/form-data">
                                        @csrf                                    
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Menu<sup
                                                        class="text-danger">*</sup></label>
                                            </div>
                                            <div class="col-4">
                                                <select id="select" class="form-control" name="menu_id" required  value="{{old('menu_id')}}">
                                                    <option value="">--Pilih--</option>
                                                    @foreach ($menu as $key => $value)
                                                        <option value="{{ $value->id }}">
                                                            {{-- <img src="{{ asset('storage/' . $value->foto_produk) }}"> --}}
                                                            {{ $value->nama_menu }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-3">
                                                <label for="text-input" class=" form-control-label">Qty<sup
                                                        class="text-danger">*</sup></label>
                                            </div>
                                            <div class="col-2">
                                                <input type="number" id="text-input" name="qty" placeholder="0"
                                                    class="form-control">
                                                <div class="text-danger">
                                                    @error('qty')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-plus"></i> Tambah
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- USER DATA-->
                            <div class="card-body">
                                <div class="card-header">
                                    <h3 class="card-title">Item</h3>
                                </div>
                                <div class="user-data m-b-30">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>Tanggal</td>
                                                <td>Menu</td>
                                                <td>Qty</td>
                                                <td>Harga</td>
                                                <td>Total</td>
                                                {{-- <td>Status Cart</td> --}}
                                            </tr>
                                        </thead>
                                        @if (Auth::User()->role->nama_role=='Kasir')
                                            @foreach ($data as $key => $value)
                                                {{-- <h4 class="card-title mb-1">{{$value->nama_cust}}</h4> --}}
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="table-data__info">
                                                                <h6>{{ $value->created_at }}</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="table-data__info">
                                                                <h6>{{ $value->menu->nama_menu }}</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="table-data__info">
                                                                <h6>{{ $value->qty }}</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="table-data__info">
                                                                <h6>Rp.{{ $value->menu->harga }}</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="table-data__info">
                                                                <h6>Rp.{{ $value->qty * $value->menu->harga }}</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="table-data-feature">
                                                                <form action="{{ route('Cart.destroy', $value->id) }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @method ('DELETE')
                                                                    @csrf
                                                                    <button class="item" data-toggle="tooltip"
                                                                        data-placement="top" title="Delete">
                                                                        <i class="zmdi zmdi-delete"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            @endforeach
                                        @endif
                                    </table>
                                </div>
                            </div>
                            <!-- END USER DATA-->
                            <div class="col col-lg-4 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Form Pemesanan</h3>
                                        </div>
                                        <hr>
                                        <form action="{{route('transaksi.store')}}" method="post" novalidate="novalidate">
                                            @csrf
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Nama Pelanggan</label>
                                                <input type="text" id="text-input" name="nama_pelanggan" placeholder="Text"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="text-input" class=" form-control-label">Status Order<sup
                                                        class="text-danger">*</sup></label>
                                            </div>
                                            <select id="select" class="form-control" name="status_order" required
                                                value="">
                                                <option value="">--Pilih--</option>
                                                <option value="takeaway">Take Away</option>
                                                <option value="dinein">Dine In</option>
                                            </select>
                                            <div class="form-group">
                                                <label for="subtotal" class="control-label mb-1">Sub Total</label>
                                                <input id="subtotal" name="subtotal" value="{{ $totalSubTotal }}"
                                                    type="text" class="form-control" readonly aria-required="true"
                                                    aria-invalid="false">
                                            </div>
                                            @if (Auth::User()->role->nama_role=='Kasir')
                                            <div class="form-group">
                                                <label for="diskon" class="control-label mb-1">Diskon</label>
                                                <input onchange="clickDiskon()" id="diskon" name="diskon" type="tel"
                                                    class="form-control diskon identified visa" value=""
                                                    data-val="true" autocomplete="diskon">
                                                <span class="help-block" data-valmsg-for="diskon"
                                                    data-valmsg-replace="true"></span>
                                            </div>
                                            @endif
                                            <script>
                                                function clickDiskon() {
                                                    dataDiskon = document.getElementById("diskon").value;
                                                    let HargaDiskon = ({{$totalSubTotal}}*dataDiskon)/100

                                                    console.log(HargaDiskon,'diskon')
                                                    document.getElementById("subtotal").value = {{$totalSubTotal}}-HargaDiskon;
                                                }
                                            </script>
                                            <div>
                                                <button type="submit" class="btn btn-danger btn-block">
                                                    Buat Pesanan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTAINER-->
        </div>
    </div>
</x-dashboard-layout>
