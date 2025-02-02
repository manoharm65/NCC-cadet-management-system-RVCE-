<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements Page</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* Achievements Section Styling */
        #achievements {
            padding: 60px 0;
            background-color: #f9f9f9;
        }

        #achievements .title {
            font-size: 36px;
            font-weight: bold;
            color: #333;
        }

        #achievements .description {
            font-size: 18px;
            color: #777;
            margin-bottom: 30px;
        }

        .achievement-card {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 30px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .achievement-card:hover {
            transform: scale(1.05);
        }

        .achievement-img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .achievement-title {
            font-size: 22px;
            font-weight: 600;
            margin-top: 15px;
        }

        .achievement-date {
            font-size: 16px;
            color: #555;
        }

        .achievement-description {
            font-size: 16px;
            color: #666;
            margin-top: 15px;
        }

        /* Filter Dropdown Styling */
        .filter {
            margin-bottom: 30px;
            text-align: center;
        }

        .filter select {
            padding: 8px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Responsive Grid */
        .container {
            width: 80%;
            margin: 0 auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .col-md-4 {
            flex: 1 1 30%;
            margin: 10px;
        }

        /* Media Query for Smaller Screens */
        @media (max-width: 768px) {
            .col-md-4 {
                flex: 1 1 100%;
                margin-bottom: 20px;
            }

            #achievements .title {
                font-size: 28px;
            }

            #achievements .description {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>

    <!-- Achievements Section Start -->
    <div class="section" id="achievements">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="title">Our Achievements</h2>
                    <p class="description">Here are some of our major accomplishments and milestones achieved over the years.</p>
                </div>
            </div>

            <!-- Filter Dropdown -->
            <div class="filter">
                <label for="yearFilter">Filter by Year:</label>
                <select id="yearFilter" onchange="filterAchievements()">
                    <option value="all">All</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                </select>
            </div>

            <div class="row">
                <!-- Achievement Item 1 -->
                <div class="col-md-4">
                    <div class="achievement-card">
                        <img src="assets/img/achievement1.jpg" alt="Achievement 1" class="achievement-img">
                        <h4 class="achievement-title">National Award</h4>
                        <p class="achievement-date">2024</p>
                        <p class="achievement-description">Awarded for excellence in leadership and community service at the national level.</p>
                    </div>
                </div>

                <!-- Achievement Item 2 -->
                <div class="col-md-4">
                    <div class="achievement-card">
                        <img src="assets/img/achievement2.jpg" alt="Achievement 2" class="achievement-img">
                        <h4 class="achievement-title">Best NCC Unit</h4>
                        <p class="achievement-date">2023</p>
                        <p class="achievement-description">Recognized as the best NCC unit for overall performance in training and events.</p>
                    </div>
                </div>

                <!-- Achievement Item 3 -->
                <div class="col-md-4">
                    <div class="achievement-card">
                        <img src="assets/img/achievement3.jpg" alt="Achievement 3" class="achievement-img">
                        <h4 class="achievement-title">Sports Championship</h4>
                        <p class="achievement-date">2022</p>
                        <p class="achievement-description">Won the regional sports championship in various categories.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Achievements Section End -->

    <script>
        // JavaScript for filtering achievements by year
        function filterAchievements() {
            var year = document.getElementById("yearFilter").value;
            var cards = document.querySelectorAll(".achievement-card");

            cards.forEach(function(card) {
                var cardYear = card.querySelector(".achievement-date").textContent.trim();
                if (year === "all" || cardYear.includes(year)) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }
            });
        }
    </script>

</body>

</html>
