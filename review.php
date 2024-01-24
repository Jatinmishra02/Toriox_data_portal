<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Reviews</title>
    <style>
        /* General Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Second Review Section Styles */
        .second-review-section {
            background: #f9f9f9;
            padding: 40px;
            text-align: center;
        }

        .second-review-card {
            background: #fff;
            color: #000;
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, opacity 0.5s;
            animation: fadeIn 1s; /* Add a fade-in animation */
        }

        .second-review-card:hover {
            transform: scale(1.05);
        }

        .second-review-card h3 {
            margin: 0;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .second-review-card {
                width: 80%;
                margin: 10px;
            }
        }

        @media (min-width: 1200px) {
            .second-review-card {
                width: 100%; /* Make the cards occupy the full width on larger screens */
            }
        }

        /* Keyframes for fade-in animation */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Additional animations */
        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .second-review-card:hover {
            animation: rotate 1s infinite, bounce 0.5s infinite;
        }
    </style>
</head>
<body>
    <section class="second-review-section">
        <h2>Customer Reviews</h2>
        <div class="second-review-card">
            <h3>Lisa Anderson</h3>
            <p>Rating: 4/5</p>
               <h3>⭐⭐⭐⭐
            <p>"The lead generation services have been beneficial for our marketing efforts. Good job!"</p>
        </div>
        <div class="second-review-card">
            <h3>Michael Brown</h3>
            <p>Rating: 5/5</p>
               <h3>⭐⭐⭐⭐🌟</h3>
            <p>"I highly recommend their services. We've seen a significant increase in our leads since we started working with them."</p>
        </div>
        <div class="second-review-card">
            <h3>Susan Taylor</h3>
            <p>Rating: 4/5</p>
              <h3>⭐⭐⭐⭐
            <p>"Their team is dedicated to helping clients succeed. We've had a great experience working with them."</p>
        </div>
    </section>
</body>
</html>


