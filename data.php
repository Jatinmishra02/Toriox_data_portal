<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proven Results</title>
    <style>
        .counting-container {
            background: rgb(253, 29, 29);
            background: linear-gradient(90deg, rgba(253, 29, 29, 1) 45%, rgba(252, 250, 69, 1) 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px; /* Added some padding for better spacing */
        }

        .counting-item {
            margin: 10px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            max-width: 300px; /* Limit the width of counting items */
            text-align: center; /* Center-align text */
        }

        h2 {
            font-size: 1.2rem;
            color: #000;
        }

        .counting-percentage {
            font-size: 2rem;
        }

        /* Style the specific heading */
        h2 span.count {
            font-weight: bold;
            color: #33CCFF;
        }

        /* Media query for smaller screens */
        @media (max-width: 768px) {
            .counting-container {
                flex-direction: column; /* Display vertically on smaller screens */
            }

            .counting-item {
                max-width: none; /* Remove max-width to allow full width */
            }
        }
    </style>
</head>
<body>
    <div class="counting-container">
        <div class="counting-item" id="customers-item">
            <h2>Proven results from <span class="count" id="customers-count">0</span>+ customers</h2>
        </div>
        <div class="counting-item" id="win-rates-item">
            <h2><span class="counting-percentage" id="win-rates-count">0</span>% Increase in win rates</h2>
        </div>
        <div class="counting-item" id="marketing-spend-item">
            <h2><span class="counting-percentage" id="marketing-spend-count">0</span>% Decrease in marketing spend</h2>
        </div>
        <div class="counting-item" id="productivity-item">
            <h2><span class="counting-percentage" id="productivity-count">0</span>% Increase in overall productivity</h2>
        </div>
    </div>

    <script>
        // Function to animate counting
        function animateCount(id, target, duration) {
            const element = document.getElementById(id);
            let current = 0;
            const increment = target / duration;
            const updateCount = () => {
                current += increment;
                element.textContent = Math.round(current);
                if (current < target) {
                    requestAnimationFrame(updateCount);
                }
            };
            updateCount();
        }

        // Initial values and durations
        animateCount("customers-count", 35000, 800);
        animateCount("win-rates-count", 100, 800);
        animateCount("marketing-spend-count", 70, 800);
        animateCount("productivity-count", 63, 800);
    </script>
</body>
</html>
