<h1>Your Shopping Cart</h1>
<?php
if ($num_rows < 1 && $lesson_num_rows < 1) {
  echo "<p>You currently have no items in your shopping basket.</p>";
} else {
  echo "<p>".$showing_statement."</p>";
  $user_type = 'public';
  echo Modules::run('cart/_draw_cart_content', $query, $lesson_query, $user_type);
  //echo Modules::run('cart/_attempt_draw_checkout_btn', $query);
}
?>
