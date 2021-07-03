<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hai! Kami dari Sistem Arsip Alumni SMKN 1 Katapang. Silahkan klik link dibawah untuk mereset password kamu!</div>
                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Link konfirmasi anda sudah dikirim! Silahkan cek email anda.') }}
                    </div>
                    @endif
                    {!! $content !!}
                </div>
            </div>
        </div>
    </div>
</div>