<?php
/**
 * @var $product array
 * @var $feedbacks array
 */
?>
<?= renderTemplate('blocks/card/main', ['product' => $product]);?>
<hr>
<?= renderTemplate('blocks/card/feedbacks', ['product' => $product, 'feedbacks' => $feedbacks]);?>
