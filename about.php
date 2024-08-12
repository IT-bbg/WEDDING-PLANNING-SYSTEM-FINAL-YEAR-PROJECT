<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Wedding Planning System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url("C:\Users\Claris\Downloads\background photo.jpeg")
            background-color: white;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        main {
            padding: 10px;
        }

        section {
            margin-bottom: 20px;
        }

        h2 {
            color: green;
        }

        footer {
            background-color: green;
            color: white;
            text-align: center;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>About Us</h1>
    </header>
    <main>
        <section>
            <h2>Our Story</h2>
            <p>
                <?php
                // Fetching about us content from a database or any other source can be done here
                // For simplicity, let's use a hardcoded string
                $aboutUsContent = "Welcome to our Wedding Planning System! We are dedicated to making your special day unforgettable. Our team of experienced wedding planners is here to help you every step of the way.";
                echo $aboutUsContent;
                ?>
            </p>
        </section>
        <section>
            <h2>Our Mission</h2>
            <p>
                <?php
                $missionStatement = "Our mission is to provide top-notch wedding planning services that cater to your unique needs and preferences. We strive to make the planning process seamless and enjoyable for you.";
                echo $missionStatement;
                ?>
            </p>
        </section>
        <section>
            <h2>Meet the Team</h2>
            <ul>
                <?php
                // Assuming you have an array of team members
                $teamMembers = [
                    "Precious Korir- Lead Planner",
                    "Ivy kariuki - Event Coordinator",
                    "Santha Chepkemoi - Floral Designer",
                    "Samuel collins - Photographer"
                ];

                foreach ($teamMembers as $member) {
                    echo "<li>$member</li>";
                }
                ?>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Wedding Planning System. All rights reserved.</p>
    </footer>
</body>
</html>
