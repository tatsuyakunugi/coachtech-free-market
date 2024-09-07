<p>決済画面へリダイレクトします。</p>
<p>そのまましばらくお待ちください。</p>
<script src="https://js.stripe.com/v3/"></script>
<script>
    const publicKey = '{{ $publicKey }}';
    const stripe = Stripe(publicKey);
    window.onload = function() {
        stripe.redirectToCheckout({
            sessionId: '{{ $session->id }}'
        }).then(function (result) {
            window.location.href = 'http://localhost/purchase/{{ $item->id }}';
        });
    }
</script>