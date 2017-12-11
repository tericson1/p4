<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Balance;
use App\Bill;
use App\Income;
use Carbon\Carbon;

class MoneyController extends Controller
{
  public function index ()

  {$balances = Balance::orderBy('amount')->get();
    $bills = Bill::orderBy('amount')->get();
    $incomes = Income::orderBy('amount')->get();
    $result = Balance::orderBy('updated_at','desc')->first();
    $result2s = Bill::where('paid', '=', '0')->get();
    $result3s = Income::where('daterecieved', '>=', Carbon::today())->get();

        return view('balance')->with([
            'balances' => $balances,
          'bills' => $bills,
            'incomes' => $incomes,
    'result' => $result,
  'result2s' => $result2s,
  'result3s' => $result3s,
    ]);
  }

  public function store ()

  {return view ('main');

  }


  public function balanceval(Request $request)
  {
    $this->validate($request, [
      'amount' => 'required|min:1|numeric',
      'date' => 'required|date',
    ]);
    $balance = new Balance();
    $balance->amount = $request->input('amount');
    $balance->date = $request->input('date');
    $balance->save();

    return view('balance');
    ##return redirect('/balance')->with('alert', 'The amount '.$request->input('amount').' was added.');
  }

  public function bills(Request $request)
  {
    $this->validate($request, [
      'amount' => 'required|min:1|numeric',
      'due' => 'required|min:1',
      'source' => 'required|min:1',]);
    $bill = new Bill();
    $bill->amount = $request->input('amount');
    $bill->due = $request->input('due');
    $bill->source = $request->input('source');
    $bill->paid = $request->input('paid');
    $bill->save();
    return view ('blank');
  }

  public function incomes(Request $request)
  {
    $this->validate($request, [
      'amount' => 'required|min:1|numeric',
      'daterecieved' => 'required|min:1',
      'source' => 'required|min:1',]);
    $income = new Income();
    $income->amount = $request->input('amount');
    $income->daterecieved = $request->input('daterecieved');
    $income->source = $request->input('source');
    $income->save();
    return view ('blank');
  }

  public function edit($id)
  {
      $balance = Balance::find($id);

      if (!$balance) {
          return redirect('/balance')->with('alert', 'Book not found');
      }

      return view('book.edit')->with(['balance' => $balance]);
  }

  public function pastdata ()
  {

    $balances = Balance::orderBy('amount')->get();
$bills = Bill::orderBy('amount')->get();
$incomes = Income::orderBy('amount')->get();

      return view('past')->with([
          'balances' => $balances,
          'bills' => $bills,
              'incomes' => $incomes,

          ]);
  }


  public function practice6()
  {
$result3s = Income::where('daterecieved', '>=', Carbon::today())->get();
dump($result3->toArray());



//bills that don't have paid checked in order of due date
  return view ('blank')->with([
    'result3' => $result3,
      ]);
  }


}
