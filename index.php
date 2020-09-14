<?php

// fw = for who
function orderPizza($pizzatype, $customer)
{

  $price = calculateCostPizza($pizzatype);
  $address = getAddress($customer);

  echo 'Creating new order... <br>';
  echo 'Order finished.<br><br>';
  echo "A {$pizzatype} schould be be sent to {$customer} <br>";
  echo "The address: {$address} <br>";
  echo "The bill is € {$price} <br>";
};

function getAddress($customer)
{
  switch ($customer) {
    case 'koen':
      return 'a yacht in Antwerp';
    case 'manuele':
      return 'somewhere in Belgium';
    case 'bert':
      return 'BeCode office';
    default:
      return 'No address known';
  }
};

function calculateCostPizza($pizzaType)
{
  switch ($pizzaType) {
    case 'marguerita':
      return 5;
    case 'golden':
      return 100;
    case 'calzone':
      return 10;
    case 'hawai':
      throw new Exception('Computer says no');
  }
}

function orderPizzaForAll()
{
  orderPizza('calzone', 'koen');
  orderPizza('marguerita', 'manuele');
  orderPizza('golden', 'students');
};

orderPizzaForAll();



// Use single quotes as best practise, and use \ (alt-shft-/) escape for 'it\'s'
// Clear naming: use Camelcase as preference, start a function with a verb
// when you use double quotes, you can use {$variable}
// Make an echo statement for every break
// Do not use else and return early