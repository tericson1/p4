<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Balance;
use App\Bill;
use App\Income;
use App\Categorie;
use Carbon\Carbon;

class MoneyController extends Controller
{
  public function index ()

  {$balances = Balance::orderBy('amount')->get();
    $bills = Bill::orderBy('amount')->get();
    $incomes = Income::orderBy('amount')->get();
    $result = Balance::orderBy('date','desc')->first();
    $result2s = Bill::where('paid', '=', '0')->get(); #Bills not paid
    $result3s = Income::where('daterecieved', '>=', Carbon::today())->get(); #income coming in after today
    $resulttotals = $result-> amount + $result3s->sum('amount') - $result2s->sum('amount'); #balance + income - bills equals spendable cash


    return view('balance')->with([
      'balances' => $balances,
      'bills' => $bills,
      'incomes' => $incomes,
      'result' => $result,
      'result2s' => $result2s,
      'result3s' => $result3s,
      'resulttotals' => $resulttotals,
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

    return redirect('/')->with('alert', 'The balance '.$request->input('amount').' was added.');



    ##return redirect('/balance')->with('alert', 'The amount '.$request->input('amount').' was added.');
  }

  public function bills(Request $request)
  {
    $this->validate($request, [
      'amount' => 'required|min:1|numeric',
      'due' => 'required|date',
      'source' => 'required|min:1',]);
      $bill = new Bill();
      $bill->amount = $request->input('amount');
      $bill->due = $request->input('due');
      $bill->source = $request->input('source');
      $bill->paid = $request->input('paid');
      $bill->save();
      return redirect('/')->with('alert', 'The bill '.$request->input('source').' was added.');

    }

    public function incomes(Request $request)
    {
      $this->validate($request, [
        'amount' => 'required|min:1|numeric',
        'daterecieved' => 'required|date',
        'source' => 'required|min:1',]);
        $income = new Income();
        $income->amount = $request->input('amount');
        $income->daterecieved = $request->input('daterecieved');
        $income->source = $request->input('source');
        $income->save();
        return redirect('/')->with('alert', 'The income '.$request->input('source').' was added.');
      }

      public function edit($id)
      {
        $bill = Bill:: with ('categories')->find($id);

        if (!$bill) {
          return redirect('/balance')->with('alert', 'Bill not found');
        }
        # Get all the possible tags so we can include them with checkboxes in the view
        $categoriesForCheckboxes = Categorie::getForCheckboxes();

        $categoriesForThisBill = [];
        foreach ($bill-> categories as   $categorie) {
          $categoriesForThisBill[] = $categorie->name;
        }

        return view('update')->with
        (['bill' => $bill,
        'categoriesForCheckboxes' =>$categoriesForCheckboxes,
        'categoriesForThisBill'=> $categoriesForThisBill,
      ]);
    }

    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'amount' => 'required|min:1|numeric',
        'due' => 'required|date',
        'source' => 'required|min:1',]);

        $bill = Bill::find($request->id);

   $bill->categories()->sync($request->input('categories'));

        $bill = Bill::find($id);
        $bill->categories()->sync($request->input('categories'));
        $bill->amount = $request->input('amount');
        $bill->due = $request->input('due');
        $bill->source = $request->input('source');
        $bill->paid = $request->input('paid');
        $bill->save();
        return redirect('/'.$id.'/update')->with('alert', 'Your changes were saved.');
      }

      public function delete (Request $request, $id)
      {
        $bill = Bill::find($id);
        if (!$bill) {
          return redirect('/balance')->with('alert', 'Bill not found');
        }
        return view('delete')->with(['bill' => $bill]);
      }

      public function remove(Request $request, $id)
      {
        $bill = Bill::find($id);
        if (!$bill) {
          return redirect('/delete')->with('alert', 'Bill not found');
        }
        $bill->categories()->detach();
        $bill->delete();

        return redirect('/'.$id.'/delete')->with('alert', 'The bill has been deleted.');
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
