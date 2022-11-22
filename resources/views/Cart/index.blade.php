<title>Cart</title>

<x-dashboard-layout>
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
                                    <h2>Keranjang</h2>
                                    <div class="card-body">
                                        <form method="post" action="{{route('Cart.store')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tanggal<sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-4">
                                                    <input id="tanggal" name="tanggal" type="date" class="form-control tanggal" value="" placeholder="DD / MM / YY" autocomplete="tanggal">
                                                        <span class="help-block" data-valmsg-for="tanggal" data-valmsg-replace="true"></span>
                                                    <div class="text-danger">
                                                        @error('tanggal')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Menu<sup class="text-danger">*</sup></label>

                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select id="select" class="form-control" name="menu_id" required value="{{old('menu_id')}}">
                                                        <option value="">--Pilih--</option>
                                                        @foreach($data as $key => $value)
                                                        <option value="{{$value->menu->id}}">{{$value->menu->nama_menu}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="text-danger">
                                                        @error('menu_id')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-3">
                                                    <label for="text-input" class=" form-control-label">Qty<sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-2">
                                                    <input type="number" id="text-input" name="qty" placeholder="0" class="form-control">
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
                                                        {{-- <td></td> --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- @foreach ($data as $key => $value) --}}
                                                    <tr>
                                                        <td>
                                                            <div class="table-data__info">
                                                                <h6>12-Nov-2022</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="table-data__info">
                                                                <h6>kopi</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="table-data__info">
                                                                <h6>5</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="table-data__info">
                                                                <h6>18.000</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="table-data__info">
                                                                <h6>90.000</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="table-data-feature">
                                                                <form action="#" method="POST" enctype="multipart/form-data">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    {{-- @endforeach --}}
                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END USER DATA-->
                                <div class="col col-lg-4 col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h3 class="text-center title-2">Struk Pembayaran</h3>
                                            </div>
                                            <hr>
                                            <form action="" method="post" novalidate="novalidate">
                                                <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">Sub Total</label>
                                                    <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                                <div class="form-group has-success">
                                                    <label for="cc-name" class="control-label mb-1">Nama Pelanggan</label>
                                                    <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                        autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cc-number" class="control-label mb-1">Diskon</label>
                                                    <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                        data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                        autocomplete="cc-number">
                                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                                </div>

                                                <div>
                                                    <button id="pay-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                        <span id="payment-button-amount">Bayar</span>
                                                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                    </button>
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
</x-dashboard-layout>
