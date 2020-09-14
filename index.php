<?php

// fw = for who
function order_pizza($pizzatype, $forWho)
{
  echo 'Creating new order... <br>';

  $price = calculate_cost_pizza($pizzatype);

  $address = 'unknown';
  if ($forWho == 'koen') {
    $address = 'a yacht in Antwerp';
  } elseif ($forWho == 'manuele') {
    $address = 'somewhere in Belgium';
  } elseif ($forWho == 'students') {
    $address = 'BeCode office';
  }

  $messagePizzaOrder = "A " . $pizzatype . " pizza should be sent to " . $forWho . ". <br>";
  $messageAdress = "The address: " . $address . "<br>";
  $messageBill = "The bill is €" . $price . "<br>";

  echo $messagePizzaOrder . $messageAdress . $messageBill;
  echo "Order finished.<br><br>";
}

function calculate_cost_pizza($pizzaType)
{
  $cost = 0;

  if ($pizzaType == 'marguerita') {
    $cost = 5;
  } else if ($pizzaType == 'golden') {
    $cost = 100;
  } else if ($pizzaType == 'calzone') {
    $cost = 10;
  } else if ($pizzaType == 'hawai') {
    throw new Exception('Computer says no');
  }

  return $cost;
}

order_pizza('calzone', 'koen');
order_pizza('marguerita', 'manuele');
order_pizza('golden', 'students');
