<x-dashboard-layout>
    <div class="main-content">
    <div class="section__content section__content--p30">
{{-- HALAMAN VIEW CART --}}
        <div class="container">
            <div class="row">
              <div class="col col-md-8">
                {{-- @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-warning">{{ $error }}</div>
                @endforeach
                @endif --}}
                {{-- @if ($message = Session::get('error')) --}}
                    {{-- <div class="alert alert-warning"> --}}
                        {{-- <p>{{ $message }}</p> --}}
                    </div>
                {{-- @endif --}}
                {{-- @if ($message = Session::get('success')) --}}
                    <div class="alert alert-success">
                        {{-- <p>{{ $message }}</p> --}}
                    </div>
                {{-- @endif --}}
                <div class="card">
                  <div class="card-header">
                    Item
                  </div>
                  <div class="card-body">
                    <table class="table table-stripped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Produk</th>
                          <th>Harga</th>
                          <th>Diskon</th>
                          <th>Qty</th>
                          <th>Subtotal</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        {{-- @foreach($itemcart->detail as $detail) --}}
                        <tr>
                          <td>
                          {{-- {{ $no++ }} --}}
                          </td>
                          <td>
                          {{-- {{ $detail->produk->nama_produk }} --}}
                          <br />
                          {{-- {{ $detail->produk->kode_produk }} --}}
                          </td>
                          <td>
                          {{-- {{ number_format($detail->harga, 2) }} --}}
                          </td>
                          <td>
                          {{-- {{ number_format($detail->diskon, 2) }} --}}
                          </td>
                          <td>
                            <div class="btn-group" role="group">
                              <form action="" method="post">
                              {{-- @method('patch') --}}
                              {{-- @csrf() --}}
                                <input type="hidden" name="param" value="kurang">
                                <button class="btn btn-primary btn-sm">
                                -
                                </button>
                              </form>
                              <button class="btn btn-outline-primary btn-sm" disabled="true">
                              {{-- {{ number_format($detail->qty, 2) }} --}}
                              </button>
                              <form action="" method="post">
                              {{-- @method('patch') --}}
                              {{-- @csrf() --}}
                                <input type="hidden" name="param" value="tambah">
                                <button class="btn btn-primary btn-sm">
                                +
                                </button>
                              </form>
                            </div>
                          </td>
                          <td>
                          {{-- {{ number_format($detail->subtotal, 2) }} --}}
                          </td>
                          <td>
                          <form action="#" method="post" style="display:inline;">
                            @csrf
                            {{-- {{ method_field('delete') }} --}}
                            <button type="submit" class="btn btn-sm btn-danger mb-2">
                              Hapus
                            </button>
                          </form>
                          </td>
                        </tr>
                        {{-- @endforeach --}}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col col-md-4">
                <div class="card">
                  <div class="card-header">
                    Ringkasan
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <tr>
                        <td>No Invoice</td>
                        <td class="text-right">
                          {{-- {{ $itemcart->no_invoice }} --}}
                        </td>
                      </tr>
                      <tr>
                        <td>Subtotal</td>
                        <td class="text-right">
                          {{-- {{ number_format($itemcart->subtotal, 2) }} --}}
                        </td>
                      </tr>
                      <tr>
                        <td>Diskon</td>
                        <td class="text-right">
                          {{-- {{ number_format($itemcart->diskon, 2) }} --}}
                        </td>
                      </tr>
                      <tr>
                        <td>Total</td>
                        <td class="text-right">
                          {{-- {{ number_format($itemcart->total, 2) }} --}}
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="card-footer">
                    <div class="row">
                      <div class="col">
                        <button class="btn btn-primary btn-block">Checkout</button>
                      </div>
                      <div class="col">
                        <form action="#" method="post">
                          {{-- @method('patch') --}}
                          {{-- @csrf() --}}
                          <button type="submit" class="btn btn-danger btn-block">Kosongkan</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
{{-- HALAMAN VIEW CHECKOUT --}}
          <div class="container">
            <div class="row">
              <div class="col col-8">
                {{-- @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-warning">{{ $error }}</div>
                @endforeach
                @endif
                @if ($message = Session::get('error')) --}}
                    <div class="alert alert-warning">
                        {{-- <p>{{ $message }}</p> --}}
                    </div>
                {{-- @endif
                @if ($message = Session::get('success')) --}}
                    <div class="alert alert-success">
                        {{-- <p>{{ $message }}</p> --}}
                    </div>
                {{-- @endif --}}
                <div class="row mb-2">
                  <div class="col col-12 mb-2">
                    <div class="card">
                      <div class="card-header">
                        Item
                      </div>
                      <div class="card-body">
                        <table class="table table-stripped">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Produk</th>
                              <th>Harga</th>
                              <th>Diskon</th>
                              <th>Qty</th>
                              <th>Subtotal</th>
                            </tr>
                          </thead>
                          <tbody>
                            {{-- @foreach($itemcart->detail as $detail) --}}
                            <tr>
                              <td>
                              {{-- {{ $no++ }} --}}
                              </td>
                              <td>
                              {{-- {{ $detail->produk->nama_produk }} --}}
                              <br />
                              {{-- {{ $detail->produk->kode_produk }} --}}
                              </td>
                              <td>
                              {{-- {{ number_format($detail->harga, 2) }} --}}
                              </td>
                              <td>
                              {{-- {{ number_format($detail->diskon, 2) }} --}}
                              </td>
                              <td>
                              {{-- {{ number_format($detail->qty, 2) }} --}}
                              </td>
                              <td>
                              {{-- {{ number_format($detail->subtotal, 2) }} --}}
                              </td>
                            </tr>
                            {{-- @endforeach --}}
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="col col-12">
                    <div class="card">
                      <div class="card-header">Alamat Pengiriman</div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-stripped">
                            <thead>
                              <tr>
                                <th>Nama Penerima</th>
                                <th>Alamat</th>
                                <th>No tlp</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                            {{-- @if($itemalamatpengiriman) --}}
                              <tr>
                                <td>
                                  {{-- {{ $itemalamatpengiriman->nama_penerima }} --}}
                                </td>
                                <td>
                                  {{-- {{ $itemalamatpengiriman->alamat }}<br />
                                  {{ $itemalamatpengiriman->kelurahan}}, {{ $itemalamatpengiriman->kecamatan}}<br />
                                  {{ $itemalamatpengiriman->kota}}, {{ $itemalamatpengiriman->provinsi}} - {{ $itemalamatpengiriman->kodepos}} --}}
                                </td>
                                <td>
                                  {{-- {{ $itemalamatpengiriman->no_tlp }} --}}
                                </td>
                                <td>
                                  <a href="#" class="btn btn-success btn-sm">
                                    Ubah Alamat
                                  </a>
                                </td>
                              </tr>
                            {{-- @endif --}}
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary">
                          Tambah Alamat
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col col-4">
                <div class="card">
                  <div class="card-header">
                    Ringkasan
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <tr>
                        <td>No Invoice</td>
                        <td class="text-right">
                          {{-- {{ $itemcart->no_invoice }} --}}
                        </td>
                      </tr>
                      <tr>
                        <td>Subtotal</td>
                        <td class="text-right">
                          {{-- {{ number_format($itemcart->subtotal, 2) }} --}}
                        </td>
                      </tr>
                      <tr>
                        <td>Diskon</td>
                        <td class="text-right">
                          {{-- {{ number_format($itemcart->diskon, 2) }} --}}
                        </td>
                      </tr>
                      <tr>
                        <td>Total</td>
                        <td class="text-right">
                          {{-- {{ number_format($itemcart->total, 2) }} --}}
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="card-footer">
                    <form action="#" method="post">
                      @csrf()
                      <button type="submit" class="btn btn-danger btn-block">Buat Pesanan</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</x-dashboard-layout>
