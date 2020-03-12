@extends('layouts.sb-admin2-rtl-master.mastermainadmin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">لیست دسته بندی</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    لیست

                <a href="{{route('admin.categorys.create')}}" <button type="button" class="btn btn-success">دسته بندی جدید</button></a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th> شناسه</th>
                                    <th>نام دسته بندی</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Category as $item)
                                <tr class="odd gradeX">
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>
<!-- /.row -->
@endsection
