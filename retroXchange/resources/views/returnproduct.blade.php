<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Return Product')
</x-head>

<body class="contact-us-page-layout background">
    <x-header-navbar> </x-header-navbar>
    <main>

        <!--message that will display when return is confirmed -->
        @if (session()->has('success'))
            <h2 style="color:red" align="center"> {{ session('success') }}</h2>
        @endif

        @foreach ($item as $t)
            <h1 align="center">Confirm your return for {{ $t->item_name }}:</h1><br>
        @endforeach

        <div class = "contact-us-form">
            <form method="post" action="{{ route('confirmreturn') }}">
                @csrf
                <section>
                    <p>Please select your reason for returning this item:</p>
                    <div>
                        <input type="radio" id="reason1" name="reason" style="display: inline-block;">
                        <label for="reason1">Item arrived damaged</label>
                        <input type="radio" id="reason2" name="reason" style="display: inline-block;">
                        <label for="reason2">Did not want item anymore</label>
                        <input type="radio" id="option3" name="reason" style="display: inline-block;">
                        <label for="reason3">Other</label>
                    </div><br><br>

                    <label for = "info">Additional Information:</label>
                    <textarea id="info" name="info" rows="10" cols="40"> 
                    </textarea> <br>
                    <!--input values through form submission-->
                    @foreach ($item as $t)
                        <input type="hidden" name="item_id" value="{{ $t['item_id'] }}">
                    @endforeach


                    @foreach ($purchasedItem as $p)
                        <input type="hidden" name="purchase_id" value="{{ $p['purchase_id'] }}">
                    @endforeach
                    <button type="submit">Return Item</button>
                </section>
            </form>
        </div>
    </main>
    </div>
</body>
