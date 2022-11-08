@extends('backend.master')


@section('header_style')
<link rel="stylesheet" href="{{asset('backend_assets')}}/plugins/summernote/summernote-bs4.min.css">
<style>
    .inbox_css .nav-link i {
        min-width: 30px;
        text-align: center
    }

    .note-editable.card-block {
        height: 200px;
    }

    .form-control-file {
        border: 1px solid #fff;
        margin: 0;
        height: 32px;
    }

</style>
@endsection


@section('container')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>New Service</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.service.index')}}">Service</a></li>
                    <li class="breadcrumb-item active">Create New Service</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form action="{{route('admin.service.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Basic Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Service Name">Service Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Service Name" required>
                        </div>
                        <div class="form-group">
                            <label for="Category">Category</label>
                            <select name="category" class="form-control" required>
                                <option value="">-- Select a service</option>
                                @foreach ($all_service_name as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Category">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title" required>
                        </div>
                        <label for="Image/Video">Image/Video</label>
                        <div class="row file_input file_input_del">
                            <div class="col-9 input-group">
                                <input type="file" class="form-control-file" name="image[]" multiple>
                            </div>
                            <div class="col-3">
                                <div class="btn btn-sm btn-info w-100" onclick="NewRow()"><i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>

            <!-- /.col -->
            <div class="col-md-8">
                <div class="card card-success collapsed-card compose-textarea1">
                    <div class="card-header">
                        <h3 class="card-title">Overview</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" style="width: 200px;text-align:end;background: #00000036;">Click here to collapse <i class="fas fa-plus ml-3"></i></button>
                        </div>
                    </div>
                    <div class="card-body" style="display: none;">
                        <textarea id="compose-textarea1" name="overview" class="form-control" required></textarea>
                    </div>
                </div>


                <div class="card card-success collapsed-card compose-textarea2">
                    <div class="card-header">
                        <h3 class="card-title">Description Of Services</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" style="width: 200px;text-align:end;background: #00000036;">Click here to collapse <i class="fas fa-plus ml-3"></i></button>
                        </div>
                    </div>
                    <div class="card-body" style="display: none;">
                        <textarea id="compose-textarea2" name="description" class="form-control" required></textarea>
                    </div>
                </div>

                <div class="card card-success collapsed-card compose-textarea3">
                    <div class="card-header">
                        <h3 class="card-title">Why Choose DiMarz</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" style="width: 200px;text-align:end;background: #00000036;">Click here to collapse <i class="fas fa-plus ml-3"></i></button>
                        </div>
                    </div>
                    <div class="card-body" style="display: none;">
                        <textarea id="compose-textarea3" name="why_choose_dimarz" class="form-control" required></textarea>
                    </div>
                </div>

                <div class="card card-success collapsed-card compose-textarea4">
                    <div class="card-header">
                        <h3 class="card-title">FAQ</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" style="width: 200px;text-align:end;background: #00000036;">Click here to collapse <i class="fas fa-plus ml-3"></i></button>
                        </div>
                    </div>
                    <div class="card-body" style="display: none;">
                        <textarea id="compose-textarea4" name="faq" class="form-control" required></textarea>
                    </div>
                </div>

                <div class="card p-2">
                        <div style="text-align: right">
                            <button type="submit" name="action" value="save" class="btn btn-default"><i
                                class="fa fa-archive mr-1"></i> Draft</button>
                        <button type="submit" name="action" value="next" class="btn btn-primary"><i
                                class="far fa-save mr-1"></i> Next</button>
                        </div>
                </div>
            </div>
        </div>
    </form>
</section>



@endsection



@section('footer_script')

<script>
    $(function () {
        //Enable check and uncheck all functionality
        $('.checkbox-toggle').click(function () {
            var clicks = $(this).data('clicks')
            if (clicks) {
                //Uncheck all checkboxes
                $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
                $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass(
                    'fa-square')
            } else {
                //Check all checkboxes
                $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
                $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass(
                    'fa-check-square')
            }
            $(this).data('clicks', !clicks)
        })

        //Handle starring for font awesome
        $('.mailbox-star').click(function (e) {
            e.preventDefault()
            //detect type
            var $this = $(this).find('a > i')
            var fa = $this.hasClass('fa')

            //Switch states
            if (fa) {
                $this.toggleClass('fa-star')
                $this.toggleClass('fa-star-o')
            }
        })
    })

</script>

<script src="{{asset('backend_assets')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('backend_assets')}}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>


<script>
    $(function () {
        //Add text editor
        $('#compose-textarea').summernote();
        $('#compose-textarea1').summernote();
        $('#compose-textarea2').summernote();
        $('#compose-textarea3').summernote();
        $('#compose-textarea4').summernote();
        bsCustomFileInput.init();
    })

    $('.btn-tool').click(()=>{
        let textarea_1 = $('#compose-textarea1').summernote().val();
        let textarea_2 = $('#compose-textarea2').summernote().val();
        let textarea_3 = $('#compose-textarea3').summernote().val();
        let textarea_4 = $('#compose-textarea4').summernote().val();

        if (textarea_1 == "") {
            $('.compose-textarea1').removeClass('card-success');
            $('.compose-textarea1').addClass('card-danger');
        }else{
            $('.compose-textarea1').removeClass('card-danger');
            $('.compose-textarea1').addClass('card-success');
        }
        if (textarea_2 == "") {
            $('.compose-textarea2').removeClass('card-success');
            $('.compose-textarea2').addClass('card-danger');
        }else{
            $('.compose-textarea2').removeClass('card-danger');
            $('.compose-textarea2').addClass('card-success');
        }
        if (textarea_3 == "") {
            $('.compose-textarea3').removeClass('card-success');
            $('.compose-textarea3').addClass('card-danger');
        }else{
            $('.compose-textarea3').removeClass('card-danger');
            $('.compose-textarea3').addClass('card-success');
        }
        if (textarea_4 == "") {
            $('.compose-textarea4').removeClass('card-success');
            $('.compose-textarea4').addClass('card-danger');
        }else{
            $('.compose-textarea4').removeClass('card-danger');
            $('.compose-textarea4').addClass('card-success');
        }
    });


</script>

<script>
    function NewRow() {
        // alert($('.file_input').length);
        var RowNo = ($('.file_input').length - 0) + 1;
        var Rowhtml =
            `<div class="row file_input_del my-2"><div class="col-9 input-group"><input type="file" class="form-control-file" name="image[]" multiple></div><div class="col-3 d-flex justify-content-between"><div class="btn btn-sm btn-info" style="width:45%;margin-right:5%" onclick="NewRow()"><i class="fas fa-plus"></i></div><div style="width:45%;" class="btn btn-sm btn-danger delRow"><i class="fas fa-minus"></i></div></div></div>`;
        var tableBody = $('.file_input').after(Rowhtml);

        $('.delRow').click(function () {
            $(this).parent().parent().remove();
        });

    }

    // $('.file_input_del').delegate('.delRow', 'click', function (){
    //     // $(this).parent().parent().remove();
    // })

</script>

@endsection
