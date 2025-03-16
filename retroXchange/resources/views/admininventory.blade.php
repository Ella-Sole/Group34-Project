<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Admin: Inventory')
</x-head>


<body class = "contact-us-page-layout background">
    <x-header-navbar> </x-header-navbar>

    
    <main>
        <h1 class="admin-title">Inventory</h1>
        <button class="admin-addbtn" href="adminaddproduct.html" >Add New</button>
        <table style="width:100%">
            <tr>
                <th>Product ID</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Amount Sold</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>1</td>
                <td><img src="assets/images/Red_Dead_Redemption.jpg" height=100 width=80></img></td>
                <td>Red Dead Redemption</td>
                <td>ps3</td>
                <td>£10</td>
                <td>23</td>
                <td>40</td>
                <td><button>Edit</button><button>Delete</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td><img src="assets/images/fallout.jpg" height=100 width=80></img></td>
                <td>Fallout 4</td>
                <td>xbox one</td>
                <td>£4</td>
                <td>12</td>
                <td>20</td>
                <td><button>Edit</button><button>Delete</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td><img src="assets/images/Zelda.webp" height=100 width=80></img></td>
                <td>Legend of Zelda Breath of the Wild</td>
                <td>switch</td>
                <td>£13</td>
                <td>22</td>
                <td>40</td>
                <td><button>Edit</button><button>Delete</button></td>
            </tr>
            <tr>
                <td>4</td>
                <td><img src="assets/images/super mario.jpg" height=100 width=80></img></td>
                <td>Super Mario 64</td>
                <td>switch</td>
                <td>£20</td>
                <td>20</td>
                <td>30</td>
                <td><button>Edit</button><button>Delete</button></td>
            </tr>
            <!--
            <tr>
                <td></td>
                <td><img src="" height=100 width=80></img></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>edit, delete</td>
            </tr>
            -->
          </table>
    </main>

    <x-footer> </x-footer>

    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
