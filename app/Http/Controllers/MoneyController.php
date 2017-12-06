<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Balances;

class MoneyController extends Controller
{
    public function index ()

    {##$balances = Balances :: all();
      return view ('balance');
      ##-->with (['balances'=>$balances
      ##]);
    }

    public function store ()

    {return view ('main');

    }

    public function pastdata ()

    {return view ('past');

    }

    public function balanceval(Request $request)
{
  $this->validate($request, [
   'amount' => 'required|min:1|numeric',
      'date' => 'required|min:1',
]);
$balance = new Balance();
$balance->balance = $request->input('balance');
  $balance->date = $request->input('date');

$balance->save();

}

public function practice6()
{
    # Instantiate a new Book Model object
    $balance = new balance();

    # Set the parameters
    # Note how each parameter corresponds to a field in the table
    $balance->date = '02/04/2018';
    $balance->amount = '576.34';

    $balance->save();

    dump($balance->toArray());
}


}
