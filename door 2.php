<!DOCTYPE html>
<html lang="en">
<head>
    <?php
$page_title = "The Skyward Start-Up: A Vision for the Future";
$image_path = "story2.jpg"; // Image path
$back_link = "Mainpage.php"; // Link to navigate back
$story_content = "
    In 2028, an ambitious entrepreneur named Zoe Tran was determined to change the world of aviation. While most people were focused on flying higher, Zoe had her sights set on making air travel accessible and sustainable for everyone, no matter their background or budget.

Zoe’s idea was simple yet revolutionary: an electric-powered, autonomous passenger aircraft that could fly short distances within urban environments—think flying taxis. The concept, although ambitious, promised to reduce congestion, lower emissions, and change the way people thought about travel.

After years of working as a software engineer for a leading aerospace company, Zoe took a leap of faith and founded her own start-up, TranSky Aviation. With limited funding and a small team of passionate engineers and designers, she set out to build a prototype. They faced countless obstacles—technology gaps, regulatory hurdles, and skepticism from investors. But Zoe was determined, working late into the night, pulling together a team of like-minded innovators.

The breakthrough came when they successfully developed the first fully functional electric aircraft, the SkyPod. It was sleek, quiet, and designed to transport up to five passengers in comfort while using renewable energy sources. More importantly, the aircraft could take off and land vertically, eliminating the need for runways, making it ideal for cities. Zoe's vision was finally taking flight.

The day of the first public test flight was a mixture of excitement and nervous anticipation. With media outlets, investors, and curious onlookers gathered, the SkyPod soared into the air, leaving behind only a faint hum. Zoe’s heart raced as she watched her dream unfold before her eyes. The flying taxi that could revolutionize cities had come to life.

Within months, TranSky Aviation secured major partnerships with urban development companies, and flying taxis became a reality in cities around the world. Zoe’s invention wasn’t just about technology—it was about reimagining the future of travel, making it more sustainable, accessible, and integrated into our daily lives. Her journey from a small start-up to a global aviation leader showed that innovation, when driven by a bold vision, could change the course of history.";
$back_link = "Mainpage.html";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title> 
    <style>
        body {
            margin: 0;
            font-family: 'Georgia', serif;
            background-color: #050300;
            color: #fff1e3;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #fff0e1;
            margin-bottom: 20px;
        }
        .content {
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }
        .story-image {
            display: block;
            max-width: 100%;
            margin: 20px auto;
            border: 5px solid #e9c85c9a;
            border-radius: 10px;
        }
        a.back {
            display: block;
            text-align: center;
            margin-top: 30px;
            text-decoration: none;
            color: #fff1e3;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1><?php echo $page_title; ?></h1>
    <div class="content">
        <img src="<?php echo $image_path; ?>" alt="Story Image 1" class="story-image"> 
        <p><?php echo $story_content; ?></p> 
    </div>
    <a href="<?php echo $back_link; ?>" class="back">← Back to Doors</a> 
</body>
</html>
