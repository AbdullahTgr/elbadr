@section('main')




<script src="https://eu-test.oppwa.com/v1/paymentWidgets.js?checkoutId={{$respnsedata['id']}}"></script>
<form action="{{route('ini',$id,$respnsedata['id'])}}" class="paymentWidgets" data-brands="VISA MASTER AMEX MADA"></form>

@stop
