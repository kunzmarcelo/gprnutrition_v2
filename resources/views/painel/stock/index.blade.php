@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
@stop
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Listagem</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('painel/home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Estoque</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">

            <div class="col-sm-12">
                <div class="form-group row">
                    <div class="col-md-8"></div>

                    <div class="col-md-4">
                      <a href="{{url('painel/estoque/create')}}" class="btn btn-outline-info btn-block btn-lg"><b>Cadastrar</b></a>

                    </div>


                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>



<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover data-table" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Cod</th>
                                        <th>Descrição</th>
                                        <th>Data de Entrada</th>
                                        <th>Valor</th>
                                        <th>Quantidade</th>
                                        <th>Unidade</th>
                                        <th>Fornecedor</th>
                                        <th>Situação</th>
                                    </tr>
                                </thead>

                                <tbody>


                                    @foreach($results as $result)

                                    <tr>
                                        <td>{{$result->id}}</td>
                                        <td>{{$result->description }}</td>
                                        <td>{{Carbon\Carbon::parse($result->registration_date )->format('d/m/Y')}}</td>
                                        <td>{{$result->price }}</td>
                                        <td>{{$result->the_amount }}</td>
                                        <td>{{$result->unity }}</td>
                                        <td>{{$result->provider }}</td>
                                        <td>{{$result->active }}</td>

                                        {{-- <td>
                                            <a href='{{route('works.show',$result->id)}}' align="right" class="btn btn-primary btn-sm"><i class="fas fa-folder"></i> View</a>
                                        </td>
                                        <td>
                                            <a href='{{route('works.edit',$result->id)}}' align="right" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{route('works.destroy', $result->id)}}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" align="right" class="btn btn-danger btn-sm" onclick="return confirm('Você tem certeza?');"><i class="fas fa-trash"></i> Deletar</button>
                                            </form>



                                        </td> --}}
                                    </tr>


                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <!-- /.container-fluid -->
</section>

@section('js')

  <script src="//code.jquery.com/jquery-3.5.1.js"></script>
  <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script src="//cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function () {
    $.noConflict();
    var table = $('#dataTable').DataTable();
});
</script>
@stop
@endsection
