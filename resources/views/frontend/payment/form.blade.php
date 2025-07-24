<form action="https://esewa.com.np/epay/main" method="POST">
    <input type="hidden" name="tAmt" value="{{ $paymentData['tAmt'] }}">
    <input type="hidden" name="amt" value="{{ $paymentData['amt'] }}">
    <input type="hidden" name="txAmt" value="{{ $paymentData['txAmt'] }}">
    <input type="hidden" name="psc" value="{{ $paymentData['psc'] }}">
    <input type="hidden" name="pdc" value="{{ $paymentData['pdc'] }}">
    <input type="hidden" name="scd" value="{{ $paymentData['scd'] }}">
    <input type="hidden" name="pid" value="{{ $paymentData['pid'] }}">
    <input type="hidden" name="su" value="{{ $paymentData['su'] }}">
    <input type="hidden" name="fu" value="{{ $paymentData['fu'] }}">
    <input type="submit" value="Pay Now">
</form>
