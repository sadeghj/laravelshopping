@extends('layouts.sb-admin2-rtl-master.mastermainadmin')

@section('content')
<div class="card">
    <div class="card-body">
<div class="container ">
    <div class="row align-items-center">

    	<div class="col-md-6">
	{!! Form::open(['method'=>'POST' ,'url'=>route('admin.categorys.store')] ) !!}
			<div id="contact-form" class="form-container" data-form-container>
			<div class="row">
				<div class="form-title">
					<span>دسته بندی</span>
				</div>
			</div>
			<div class="input-container">
				<div class="row">
					<span class="req-input" >
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name."> </span>
                        {!! Form::text('name', old('name'), ['placeholder'=>'نام دسته بندی','data-min-length'=>'8']) !!}
                    </span>
                </div>

				<div class="row submit-row">
                    {!! Form::submit("ثبت", ['class'=>"btn btn-block submit-form"]) !!}
				</div>
			</div>
			</div>
{!! Form::close() !!}
</div>

</div>
</div>
</div>
</div>

@endsection

