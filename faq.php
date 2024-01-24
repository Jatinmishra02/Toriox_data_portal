<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Section</title>
    <style>
        /* General Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* FAQ Section Styles */
        .faq-section {
            background: #343a40; /* Dark background color */
            color: #fff; /* White text color */
            padding: 40px;
            text-align: center;
        }

        .faq-item {
            background: #495057; /* Lighter background color */
            color: #fff; /* White text color */
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
            animation: fadeIn 1s; /* Add a fade-in animation */
        }

        .faq-item:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        .faq-item h3 {
            margin: 0;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .faq-item {
                width: 80%;
                margin: 10px;
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
    </style>
</head>
<body>
    <section class="faq-section">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-item">
            <h3>What is lead generation?</h3>
            <p>Lead generation is the process of attracting and converting potential customers into leads who have shown interest in your product or service.</p>
        </div>
        <div class="faq-item">
            <h3>How can I improve my lead generation efforts?</h3>
            <p>Improving lead generation involves strategies like creating compelling content, optimizing your website, and using effective marketing channels.</p>
        </div>
        <div class="faq-item">
            <h3>Why is email marketing important for lead generation?</h3>
            <p>Email marketing allows you to nurture leads over time and build relationships, making it a crucial part of the lead generation process.</p>
        </div>
        <div class="faq-item">
            <h3>What tools can I use for lead generation?</h3>
            <p>There are various tools available, including CRM software, email marketing platforms, and lead capture forms, to help with your lead generation efforts.</p>
        </div>
        <div class="faq-item">
            <h3>Is social media effective for lead generation?</h3>
            <p>Yes, social media platforms can be powerful tools for lead generation, allowing you to reach and engage with a broad audience.</p>
        </div>
    </section>
</body>
</html>

