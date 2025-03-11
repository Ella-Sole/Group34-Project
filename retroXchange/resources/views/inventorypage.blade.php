import React from "react";

const PreviousOrders = () => {
  const orders = [
    {
      game: "Black Ops 6",
      description: "Online Multiplayer Shooter",
      price: "£10.00",
      date: "01/01/2024",
    },
    {
      game: "Red Dead Redemption 2",
      description: "Open-World Singleplayer Story",
      price: "£20.00",
      date: "02/02/2024",
    },
  ];

  return (
    <div className="p-6 bg-white shadow-md rounded-lg">
      <header className="flex justify-between items-center pb-4 border-b">
        <h1 className="text-3xl font-bold">RetroXchange</h1>
        <nav>
          <ul className="flex space-x-4">
            <li><a href="/home" className="text-blue-500">Home</a></li>
            <li><a href="/about" className="text-blue-500">About Us</a></li>
            <li><a href="/contact" className="text-blue-500">Contact Us</a></li>
          </ul>
        </nav>
      </header>

      <main className="mt-6">
        <section className="previous-orders-section">
          <h2 className="text-2xl font-bold mb-4">Your Previous Orders</h2>
          <table className="w-full border-collapse border border-gray-300">
            <thead>
              <tr className="bg-gray-200">
                <th className="border p-2">Game</th>
                <th className="border p-2">Description</th>
                <th className="border p-2">Price</th>
                <th className="border p-2">Date of Purchase</th>
              </tr>
            </thead>
            <tbody>
              {orders.map((order, index) => (
                <tr key={index} className="text-center border">
                  <td className="p-2">{order.game}</td>
                  <td className="p-2">{order.description}</td>
                  <td className="p-2">{order.price}</td>
                  <td className="p-2">{order.date}</td>
                </tr>
              ))}
            </tbody>
          </table>

          <div className="mt-4">
            <button
              className="px-4 py-2 bg-blue-500 text-white rounded"
              onClick={() => (window.location.href = "/ShoppingBasket")}
            >
              Return to Shopping Basket
            </button>
          </div>
        </section>
      </main>

      <footer className="mt-6 border-t pt-4 text-center">
        <p>&copy; 2024 RetroXchange. All rights reserved</p>
        <div className="flex justify-center space-x-4 mt-2">
          <a href="#" className="text-blue-500">Facebook</a>
          <a href="#" className="text-blue-500">Twitter</a>
          <a href="#" className="text-blue-500">Instagram</a>
          <a href="#" className="text-blue-500">LinkedIn</a>
        </div>
      </footer>
    </div>
  );
};

export default PreviousOrders;
