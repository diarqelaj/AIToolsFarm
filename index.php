<?php
// index.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn about cutting-edge AI tools for smart farming. Transform your agricultural practices with precision technologies.">
    <title>AI Tools for Smart Farming</title>
    <!-- Link to External CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

            <main>
            <section class="hero">
                <div class="overlay">
                    <h1>Transform Your Farm with AI</h1>
                    <p>Discover cutting-edge tools that revolutionize agriculture through precision and efficiency.</p>
                    <a href="#ai-tools" class="cta-button">Learn More</a>
                </div>
            </section>

            <section class="ai-tools">
                <h2>Our AI Tools</h2>
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        <strong>Precision Farming:</strong> Use satellite imagery and AI to monitor crop health and soil conditions.
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart">
                            <line x1="12" y1="20" x2="12" y2="10"></line>
                            <line x1="18" y1="20" x2="18" y2="4"></line>
                            <line x1="6" y1="20" x2="6" y2="16"></line>
                        </svg>
                        <strong>Predictive Analytics:</strong> Forecast weather patterns and optimize planting schedules.
                    </li>
                    <li>
                        <img src="icons/smart-irrigation.png" alt="Smart Irrigation">
                        <strong>Smart Irrigation Systems:</strong> Reduce water usage with AI-driven irrigation management.
                    </li>
                    <li>
                        <img src="icons/automated-machinery.png" alt="Automated Machinery">
                        <strong>Automated Machinery:</strong> Leverage AI-powered drones and tractors for efficient fieldwork.
                    </li>
                    <li>
                        <img src="icons/pest-control.png" alt="Pest Control">
                        <strong>Pest Control:</strong> AI-powered pest monitoring systems for sustainable pest management.
                    </li>
                </ul>
                <p>
                    Our tools are designed to empower farmers and increase productivity while preserving valuable resources. Contact us to learn more!
                </p>
            </section>



            <div class="cta">
                <a href="index.php">Explore More</a>
            </div>
        </main>

        <div class="cta">
            <a href="index.php">Back to Home</a>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
