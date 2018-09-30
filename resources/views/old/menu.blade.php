<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <script>
                function increaseValue(item) {
                    var value = parseInt(document.getElementById(item).value, 10);
                    value = isNaN(value) ? 0 : value;
                    value++;
                    document.getElementById(item).value = value;
                  }
                  
                  function decreaseValue(item) {
                    var value = parseInt(document.getElementById(item).value, 10);
                    value = isNaN(value) ? 0 : value;
                    value < 1 ? value = 1 : '';
                    value--;
                    document.getElementById(item).value = value;
                  }
        </script>

        <style>
                form {
                    width: 300px;
                    margin: 0 auto;
                    text-align: center;
                    padding-top: 50px;
                  }
                  
                  .value-button {
                    display: inline-block;
                    border: 1px solid #ddd;
                    margin: 0px;
                    width: 40px;
                    height: 20px;
                    text-align: center;
                    vertical-align: middle;
                    padding: 11px 0;
                    background: #eee;
                    -webkit-touch-callout: none;
                    -webkit-user-select: none;
                    -khtml-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                  }
                  
                  .value-button:hover {
                    cursor: pointer;
                  }
                  
                  form #decrease {
                    margin-right: -4px;
                    border-radius: 8px 0 0 8px;
                  }
                  
                  form #increase {
                    margin-left: -4px;
                    border-radius: 0 8px 8px 0;
                  }
                  
                  form #input-wrap {
                    margin: 0px;
                    padding: 0px;
                  }
                  
                  input#number {
                    text-align: center;
                    border: none;
                    border-top: 1px solid #ddd;
                    border-bottom: 1px solid #ddd;
                    margin: 0px;
                    width: 40px;
                    height: 40px;
                  }
                  
                  input[type=number]::-webkit-inner-spin-button,
                  input[type=number]::-webkit-outer-spin-button {
                      -webkit-appearance: none;
                      margin: 0;
                  }
        </style>

    </head>
    <body>
       <a href="{{ route('menu_form') }}">Add Menu</a>

       <a href="{{ route('placeOrder') }}">Take order</a>
    </body>
</html>

