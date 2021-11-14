@section('main')
<pre>
 @php 
print_r($res) ;
echo $res['id'];
@endphp   
</pre>

<script src="https://eu-test.oppwa.com/v1/paymentWidgets.js?checkoutId={{$res['id']}}"></script>
<form action="home?price={{$id}}&&id={{$res['id']}}" class="paymentWidgets" data-brands="VISA MASTER AMEX"></form>

@stop
