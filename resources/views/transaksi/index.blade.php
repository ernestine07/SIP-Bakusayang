<title>Transaksi</title>

<x-dashboard-layout>
        <!-- Main content -->
        <div class="main-content">
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
                                    <th>Invoice</th>
                                    <th>Tanggal</th>
                                    <th>Total</th>
                                    <th>Status Pembayaran</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                @foreach ($params as $item)
                                <tbody>
                                    <tr>
                                      <td>
                                        {{$item->$menu_id}}
                                      </td>
                                      <td>
                                        Inv-01
                                      </td>
                                      <td>
                                        12/10/2022
                                      </td>
                                      <td>
                                        {{$item->amount}}
                                      </td>
                                      <td>
                                        {{$data->status}}
                                      </td>
                                      <td>
                                        <a href="{{ route('transaksi.show', 1) }}" class="btn btn-sm btn-info mb-2">
                                          Detail
                                        </a>
                                        <a href="{{ route('transaksi.edit', 1) }}" class="btn btn-sm btn-primary mb-2">
                                          Edit
                                        </a>
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
</x-dashboard-layout>
