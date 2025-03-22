<!DOCTYPE html>
    <html lang="en">
    <x-head>
        @section('title', 'Previous Orders')
    </x-head>

    <body class = "previous-order-page-layout background">

        <x-header-navbar> </x-header-navbar>


        <main>
            <section class="previous-orders-section">

            <!--message for successful item return-->
            @if (session()->has('success'))
                <h2 style="color:red" align="center"> {{session('success')}}</h2>
            @endif

                <h1>Your Previous Orders</h1>
                <p>Review your past orders</p>

                <!--loop over purchase histories rows, if matches user's id, display info with its items-->
                @foreach($histories as $h)
                    @if($h['users_id'] == Auth::id())
                        <div class="order-details">
                        
                        <span class="order-id">Order ID: #{{$h['purchase_id']}}</span>

                        @foreach($purchasedItems as $p)

                            @if($p['purchase_id'] == $h['purchase_id'])

                                @foreach($products as $product)

                                    @if($p['item_id'] == $product['item_id'])
                                        <form method="post" action="{{ route('returnproduct') }}">
                                        @csrf
                                        <span class="p-game-image"><img style="vertical-align:middle" src="{{ url('https://m.media-amazon.com/images/I/' . $product->item_image . '.jpg') }}" alt="Image"></span>
                                        <span class="p-game-title"><b>{{ $product['item_name'] }}</b></span>
                                        <span><p>Status: {{$p['purchase_status']}}</p></span>
                                        <input type="hidden" name="item_id" value="{{$p['item_id']}}">
                                        <input type="hidden" name="purchase_id" value="{{$p['purchase_id']}}">

                                        <!--option to return only if item isnt already returned-->
                                        @if($p['purchase_status'] != 'returned')
                                        <span><button type= "submit">Return Item</button></span>
                                        @endif

                                        </form>
                                        <br><br>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        
                        
                
                        <span class="order-date">
                            <p>Purchase Date:</p>
                            <p class="order-date1">{{$h['date_of_purchase']}}</p>
                        </span>
                        <span class="p-game-price">Total: £{{$h['total_price']}}</span><br>
                </div>

                    @endif
                @endforeach
                

                <div class="previous-orders-actions">
                    <button class="basket-button" onclick="location.href='{{ url('/basket') }}'">Return to Shopping Basket</button>
                </div>
            </section>
        </main>
        <x-footer> </x-footer>
        <script src="{{ asset('/script.js') }}"></script>
    </body>

    </html>
