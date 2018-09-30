<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

    </head>
    <body>
        {{$tableno}}

       
            <form method="POST" action="{{ route('placeOrder') }}">
                    {{ csrf_field() }}
                <input type="hidden" value="{{ $tableno }}" name="table_no" />
           <label name="item">MoMo</label>
                <div class="value-button" id="decrease" onclick="decreaseValue('momo')" value="Decrease Value">-</div>
                <input type="number" id="momo" name="momoCount" value="0" />
                <div class="value-button" id="increase" onclick="increaseValue('momo')" value="Increase Value">+</div><br><label name="item">Noodles</label>
                <div class="value-button" id="decrease" onclick="decreaseValue('noodles')" value="Decrease Value">-</div>
                <input type="number" id="noodles" name="NoodlesCount" value="0" />
                <div class="value-button" id="increase" onclick="increaseValue('noodles')" value="Increase Value">+</div><br>
           <label name="item">Soup</label>
                <div class="value-button" id="decrease" onclick="decreaseValue('soup')" value="Decrease Value">-</div>
                <input type="number" id="soup" name="SoupCount" value="0" />
                <div class="value-button" id="increase" onclick="increaseValue('soup')" value="Increase Value">+</div>
                
                <button type="submit" >Place order</button>
       </form>
        
    </body>
</html>
