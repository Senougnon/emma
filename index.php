<?php
if (isset($_POST['field'])) {
    die(var_dump($_POST));
}

<form action="index.php" method="POST">
 <input type="hidden" name="field" value="test">
 <script
   src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
   data-public-key="pk_live_TfSz212W0xSMKK7oPEogkFmp"
   data-button-text="Payer 1000"
   data-button-class="button-class"
   data-transaction-amount="1"
   data-transaction-description="Description de la transaction"
   data-currency-iso="XOF">
 </script>
</form>
