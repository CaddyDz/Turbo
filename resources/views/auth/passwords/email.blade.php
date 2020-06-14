@extends('layouts.block')

@section('title', __('Reset Password'))

@section('block')
<div class="container container--max-lg">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card flex-grow-1 mb-md-0">
				<div class="card-body">
					<h3 class="card-title">@lang('Reset Password')</h3>
					@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
					@endif

					<form method="POST" action="{{ route('password.email') }}">
						@csrf

						<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right">@lang('E-Mail Address')</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

						<div class="form-group row mb-0">
							<div class="col-md-8 offset-md-4">
								<button type="submit" class="btn btn-primary">
									@lang('Send Password Reset Link')
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
