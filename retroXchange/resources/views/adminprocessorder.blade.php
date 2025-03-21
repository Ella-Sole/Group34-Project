<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Admin: Process Order')
</x-head>


<body class = "contact-us-page-layout background">
    <x-header-navbar> </x-header-navbar>

    <main>
        <h1 class="admin-title">Process Ordered Item</h1>

        
        <form class="admin-addform" method="post" action="{{ route ('processorder') }}">
            @csrf
            
            @foreach($purchasedItem as $p)

            <p align="center">Processing for Order #{{$p['purchase_id']}}</p><br>
            @foreach($item as $t)
            <p align="center">Item name: {{$t['item_name']}}</p><br>
            @endforeach
            <label for="purchase_status">Process Status:</label>
            <select id="purchase_status" name="purchase_status">
                <option value="purchased">Purchased</option>
                <option value="delivered">Delivered</option>
                <option value="out for delivery">Out for Delivery</option>
                <option value="not delivered/shipment lost">Not delivered/shipment lost</option>
                <option value="returned">Returned</option>
            </select>

            <!--hidden inputs passed in-->
            <input type="hidden" name="item_id" value="{{ $p->item_id }}">
            <input type="hidden" name="purchase_id" value="{{ $p->purchase_id }}">

            <input type="submit" value="Process">

            @endforeach
        </form>
    </main>

    <x-footer> </x-footer>

    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
