<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Today's $</title>
</head>
<body>
  <h1>Today's $</h1>


  <form method='POST' action='/balance'>

      {{ csrf_field() }}
      <label for='date'>Date</label>
      <input type='text' name='date' id='date' value=''>
      @include('modules.error-field', ['fieldName' => 'date'])
<label for='balance'>Balance</label>
      <input type='text' name='balance' id='balance' value=''>
      @include('modules.error-field', ['fieldName' => 'balance'])
<input type='submit' value='Add balance' class='btn btn-primary btn-small'>
  </form>

  <form method='POST' action='/bill'>
</body>
</html>
