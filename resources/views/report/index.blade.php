@extends('adminlte.layouts.app')

@section('title', 'Uangku | Halaman Laporan')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Laporan Keuangan</h1>
                    </div>
<<<<<<< HEAD
<<<<<<< HEAD
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ '/ ' }}">Home</a></li>
                            <li class="breadcrumb-item active">Laporan</li>
                        </ol>
                    </div>
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
<<<<<<< HEAD
<<<<<<< HEAD
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Bulan</th>
                                            <th>Pemasukkan (Rp)</th>
                                            <th>Pengeluaran (Rp)</th>
                                            <th>Hutang (Rp)</th>
                                            <th>Tagihan (Rp)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reportData as $month => $data)
                                            <tr>
                                                <td>{{ Carbon\Carbon::createFromFormat('Y-m', $month)->format('F Y') }}</td>
                                                <td>{{ number_format($data['income'], 0, ',', '.') }}</td>
                                                <td>{{ number_format($data['expense'], 0, ',', '.') }}</td>
                                                <td>{{ number_format($data['debt'], 0, ',', '.') }}</td>
                                                <td>{{ number_format($data['bill'], 0, ',', '.') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Total</th>
                                            <th>{{ number_format($totalIncome, 0, ',', '.') }}</th>
                                            <th>{{ number_format($totalExpense, 0, ',', '.') }}</th>
                                            <th>{{ number_format($totalDebt, 0, ',', '.') }}</th>
                                            <th>{{ number_format($totalBill, 0, ',', '.') }}</th>
                                        </tr>
                                    </tfoot>
                                </table><br>
                                <a href="{{ route('report.pdf') }}" class="btn btn-primary"><i class="fas fa-print"></i>
                                    Cetak Laporan</a>
                            </div>
                        </div>

                    </div>
                </div>

=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Bulan</th>
                                        <th>Pemasukkan (Rp)</th>
                                        <th>Pengeluaran (Rp)</th>
                                        <th>Hutang (Rp)</th>
                                        <th>Tagihan (Rp)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reportData as $month => $data)
                                        <tr>
                                            <td>{{ Carbon\Carbon::createFromFormat('Y-m', $month)->format('F Y') }}</td>
                                            <td>{{ number_format($data['income'], 0, ',', '.') }}</td>
                                            <td>{{ number_format($data['expense'], 0, ',', '.') }}</td>
                                            <td>{{ number_format($data['debt'], 0, ',', '.') }}</td>
                                            <td>{{ number_format($data['bill'], 0, ',', '.') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th>{{ number_format($totalIncome, 0, ',', '.') }}</th>
                                        <th>{{ number_format($totalExpense, 0, ',', '.') }}</th>
                                        <th>{{ number_format($totalDebt, 0, ',', '.') }}</th>
                                        <th>{{ number_format($totalBill, 0, ',', '.') }}</th>
                                    </tr>
                                </tfoot>
                            </table><br>
                            <a href="{{ route('report.pdf') }}" class="btn btn-primary"><i class="fas fa-print"></i>  Cetak Laporan</a>
                            </div>
                        </div>
                    
                    </div>
                </div>
                
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            </div>
    </div>
    </section>
    </div>
@endsection
@push('scripts')
<<<<<<< HEAD
<<<<<<< HEAD
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
@endpush
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
@endpush

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
