<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">Appointment detalis:</div>
                   <div class="card-body">
                    @if (session('resent'))
                         <div class="alert alert-success" role="alert">
                            {{ __('A fresh mail has been sent to your email address.') }}
                        </div>
                    @endif
                    <p>Name: {!! $name !!}</p><br>
                    <p>Surname: {!! $surname !!}</p><br>
                    <p>Reason: {!! $reason !!}</p><br>
                    <p>Doctor: {!! $doctor !!}</p>
                    <p>Date: {!! $date !!}</p><br>
                    <p>Message: {!! $content !!}</p><br>
                </div>
            </div>
        </div>
    </div>
</div>