<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe Payment</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f2f2f2;
    }

    .container {
        text-align: center;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #fff;

    }

    button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #0056b3;
    }

    h1,
    h2 {
        margin-bottom: 20px;
        color: #333;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Product: Smart AC</h1>
        <h2>Price: $10,000</h2>
        <form action="{{ route('stripe') }}" method="post">
            @csrf
            <input type="hidden" name="product_name" value="Smart AC">
            <input type="hidden" name="quantity" value="2">
            <input type="hidden" name="price" value="10000">
            <button type="submit">Stripe Pay</button>
        </form>
    </div>
</body>

</html>