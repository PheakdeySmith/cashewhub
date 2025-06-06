@extends('backends.layouts.blank')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush



@section('content')
<div class="auth-bg d-flex min-vh-100 justify-content-center align-items-center">
    <div class="row g-0 justify-content-center w-100 m-xxl-5 px-xxl-4 m-3">
        <div class="col-xl-4 col-lg-5 col-md-6">
            <div class="card overflow-hidden text-center h-100 p-xxl-4 p-3 mb-0">
                <a href="https://coderthemes.com/boron/layouts/index.html" class="auth-brand mb-3">
                    <img src="{{ asset('assets') }}/images/logo-dark.png" alt="dark logo" height="24" class="logo-dark">
                    <img src="{{ asset('assets') }}/images/logo.png" alt="logo light" height="24" class="logo-light">
                </a>

                <h4 class="fw-semibold mb-2">Login With Pin</h4>

                <p class="text-muted mb-4">We sent you a code , please enter it below to verify your number <span class="text-primary fw-medium">+ (94) 883-630-646</span></p>

                <form action="https://coderthemes.com/boron/layouts/index.html" class="text-start mb-3">
                    <label class="form-label" for="code">Enter 6 Digit Code</label>
                    <div class="d-flex gap-2 mt-1 mb-3">
                        <input type="text" maxlength="1" class="form-control text-center">
                        <input type="text" maxlength="1" class="form-control text-center">
                        <input type="text" maxlength="1" class="form-control text-center">
                        <input type="text" maxlength="1" class="form-control text-center">
                        <input type="text" maxlength="1" class="form-control text-center">
                        <input type="text" maxlength="1" class="form-control text-center">
                    </div>
                    <div class="mb-3 d-grid">
                        <button class="btn btn-primary" type="submit">Continue</button>
                    </div>
                    <p class="mb-0 text-center">Don't received code yet? <a href="https://coderthemes.com/boron/layouts/auth-login-pin.html#!" class="link-primary fw-semibold text-decoration-underline">Send Again</a></p>
                </form>

                <p class="text-danger fs-14 mb-4">Back to <a href="https://coderthemes.com/boron/layouts/index.html" class="fw-semibold text-dark ms-1">Home !</a></p>

                <p class="mt-auto mb-0">
                    <script>document.write(new Date().getFullYear())</script> © Boron - By <span class="fw-bold text-decoration-underline text-uppercase text-reset fs-12">Coderthemes</span>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection



@push('script')

@endpush
