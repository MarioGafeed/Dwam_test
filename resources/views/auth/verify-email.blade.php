@extends('frontend.layout.app')

@section('content')


<br></br>
<br></br>
<br></br>


<div class="row justify-content-center">
 <div id="contact"  >
   <div class="alert alert-success">
     {{ trans('main.verify_succ') }}
   </div>

   <!-- container -->
   <div class="container">

     <!-- row -->
     <div class="row justify-content-center">
         <div class="contact-form">
           <div class="alert alert-danger"  >
             {{ trans('main.verify_problem') }}
           <form  action="{{ url('/email/verification-notification') }}" method="post">
              @csrf
            <button type="submit"  class="btn btn-small bg-yellow"  name="button">{{ trans('main.resend_mail') }}</button>
           </form>
         </div>
       </div>

     </div>
       <!-- /login form -->

   </div>
     <!-- /row -->

   </div>
   <!-- /container -->
</div>

@endsection
