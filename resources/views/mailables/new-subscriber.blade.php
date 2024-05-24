<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #ffcc00;
            text-align: center;
            padding: 20px;
        }
        .header img {
            max-width: 100%;
            height: auto;
        }
        .content {
            padding: 20px;
        }
        .content h1 {
            color: #007bff;
        }
        .content p {
            line-height: 1.6;
        }
        .button-container {
            text-align: center;
            margin: 20px 0;
        }
        .button-container a {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
            font-size: 12px;
        }
        .footer a {
            color: #ffcc00;
            text-decoration: none;
        }
        /* Additional styles for components */
        .paragraph {
            padding-bottom: 20px;
        }
        .table-container {
            margin: 20px 0;
        }
        .table-container table {
            width: 100%;
            border-collapse: collapse;
        }
        .table-container th {
            background-color: #ffcc00;
            padding: 10px;
        }
        .table-container td {
            border: 1px solid #ddd;
            padding: 10px;
        }
        .button-container-two {
            text-align: center;
            margin: 20px 0;
        }
        .button-container-two a {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            display: inline-block;
            margin: 0 10px;
        }
        .image-text-container {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }
        .image-text-container img {
            max-width: 50%;
            height: auto;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://placehold.co/600x400/png" alt="Header Image">
        </div>
        <div class="content">
            <h1>Hello Astronaut!</h1>

            <!-- component paragraph start -->
            <p class="paragraph">Thank you for signing up for the new Mastering Nova course!</p>
            <!-- component paragraph end -->

            <p>Just like preparing for a space mission, we're about to embark on an exciting journey to explore the depths of Laravel Nova.</p>
            <p>I'm thrilled to guide you through this adventure and to offer you an exclusive discount for our launch day.</p>
            <p>Stay tuned for our countdown to lift-off!</p>

            <!-- component table start -->
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Header 1</th>
                            <th>Header 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Row 1, Col 1</td>
                            <td>Row 1, Col 2</td>
                        </tr>
                        <tr>
                            <td>Row 2, Col 1</td>
                            <td>Row 2, Col 2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- component table end -->

            <!-- component single button start -->
            <div class="button-container">
                <a href="#">Launch Day Discount</a>
            </div>
            <!-- component single button end -->

            <!-- component two buttons start -->
            <div class="button-container-two">
                <a href="#">Button 1</a>
                <a href="#">Button 2</a>
            </div>
            <!-- component two buttons end -->

            <!-- component image with text start -->
            <div class="image-text-container">
                <img src="https://placehold.co/300x300/png" alt="Side Image">
                <p>We're excited to bring you this course. Stay tuned for more updates and exclusive content.</p>
            </div>
            <!-- component image with text end -->

            <p>Clear skies and good coding,<br>Bruno Falcão</p>
        </div>
        <div class="footer">
            <p>Follow us on <a href="#">Twitter</a> and <a href="#">LinkedIn</a></p>
            <p><a href="#">Subscribe to the newsletter</a></p>
            <p>ActiveCampaign LLC, 1 North Dearborn St, 5th Floor, Chicago, IL 60602</p>
        </div>
    </div>
</body>
</html>
