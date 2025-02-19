<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>index.css">
    <title>Detail Booking</title>
    <style>
        .container {
            border-radius: 12px;
            border: 1px solid grey;
            width: 80%;
            min-height: 400px;
            padding: 80px;
            margin: 50px auto;
            background-color: #F2FBFF;
        }

        h1 {
            color: #100E3B;
            text-align: center;
        }

        .card {
            margin: 20px auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            color: #100E3B;
        }

        p {
            text-align: center;
            margin: 30px auto;
            font-size: 24px;
        }

        .footer-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .back {
            cursor: pointer;
            background-color: #eaeaea;
            width: 190px;
            border-radius: 12px;
            margin-top: 40px;
            padding: 8px 14px;
            text-align: center;
        }

        .back a {
            font-size: 16px;
            color: #100E3B;
            text-decoration: none;
            display: block;
            width: 100%;
        }

        .btn-booking {
            color: #eaeaea;
            cursor: pointer;
            text-align: center;
            font-size: 16px;
            padding: 8px 14px;
            background-color: #100E3B;
            width: 190px;
            border-radius: 12px;
        }

        form {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
        }

        form>div {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            margin-top: 7px;
        }

        form input {
            border: none;
            width: 400px;
            border-radius: 12px;
            padding: 10px;
        }



        @media screen and (max-width:800px) {
            .container {
                width: 100%;
                height: 100vh;
                padding: 10px;
            }

            h1 {
                font-size: 28px;
            }

            .card {
                margin: 5px auto;
                padding: 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Success Booking</h1>
        <p>Congratulation, our admin will contact you as soon as possible!</p>
        <form>
            <input type="hidden" name="id" value="<?php echo $transaksi['id'] ?>">
            <div class="name">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?= $transaksi['name']; ?>" readonly>
            </div>
            <div class="telp">
                <label for="phone">Phone</label>
                <input type="number" id="phone" name="phone" value="<?= $transaksi['telp']; ?>" style="background-color: white;" readonly>
            </div>
            <div class="email">
                <label for="name">Name</label>
                <input type="text" name="email" id="email" value="<?= $transaksi['email']; ?>" readonly>
            </div>
            <div class="address">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" value="<?= $transaksi['address']; ?>" readonly>
            </div>
            <div class="kost">
                <label for="kost">Kost</label>
                <input type="text" name="kost" id="kost" value="<?= $transaksi['kost']; ?>" readonly>
            </div>
            <div class="full_address">
                <label for="full_address">Full Address</label>
                <input type="text" name="full_address" id="full_address" value="<?= $transaksi['kost_location']; ?>" readonly>
            </div>
            <div class="price">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" value="<?= number_format($transaksi['price']); ?>" readonly>
            </div>
            <div class="date">
                <label for="dateOfEntry">Date Of Entry</label>
                <input type="text" name="dateOfEntry" id="dateOfEntry" value="<?= $transaksi['start_date']; ?>" readonly>
            </div>
            <div class="picture-input">
                <label for="proof">Payment Status</label>
                <input type="text" value="Lunas" name="proof" id="proof" readonly>
            </div>
            <div class="footer-card">
                <div class="chat" style="margin-top: 40px;">
                    <a href="<?= base_url('home'); ?>">Back to Home</a>
                </div>
            </div>
            <div class="footer-card">
                <div class="chat" style="margin-top: 40px;">
                    <a href="<?= base_url('auth'); ?>">Go to Profile</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>