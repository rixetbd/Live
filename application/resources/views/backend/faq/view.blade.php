@section('header_style')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('backend_assets')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet"
    href="{{asset('backend_assets')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('backend_assets')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@extends('backend.master')

@section('container')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">FAQ</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">FAQ</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Faq list</h3>
                    </div>
                    <div class="card-body">

                        @forelse ($all_faq as $item)

                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">{{$item->question}}</h3>
                                <div class="card-tools">
                                    <a href="#" class="m-1 edit_modal" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}"><i class="fas fa-edit text-info"></i></a>
                                    <a href="{{route('admin.faq.destroy', $item->id)}}" class="m-1 mr-4"><i class="fas fa-trash text-danger"></i></a>
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">{{$item->answer}}</div>
                        </div>


                        <div class="modal fade" id="exampleModalCenter{{$item->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit FAQ</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('admin.faq.update')}}" method="post">
                                            @csrf
                                            <div class="my-3">
                                                <input type="hidden" name="id" value="{{$item->id}}" required>
                                            </div>

                                            <div class="my-3">
                                                <select name="service_name_id" class="form-control">
                                                    <option>-- Select a service</option>
                                                    @foreach ($all_service_name as $name)
                                                    <option value="{{$name->id}}" {{($name->id == $item->service_name_id ? "selected":'')}}>
                                                        {{$name->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="my-3">
                                                <input type="text" class="form-control" name="question"
                                                    placeholder="Question" value="{{$item->question}}">
                                            </div>
                                            <div class="my-3">
                                                <textarea name="answer" class="form-control">{{$item->answer}}</textarea>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        @empty

                            <p>No Data Found</p>

                        @endforelse

                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>

    </div>
</section>

@endsection

@section('footer_script')
<script src="{{asset('backend_assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('backend_assets')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('backend_assets')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('backend_assets')}}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
    $("#example100").DataTable();
    $(function () {
        bsCustomFileInput.init();
    });

</script>
@endsection
