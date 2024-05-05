<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" type="text/css" href="./CSS/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&family=Dancing+Script:wght@700&family=Seaweed+Script&family=Sora&display=swap" rel="stylesheet">
</head>
<body>

<?php

$education = [
    [
        'school' => 'Holy Spirit School - (2008 to 2010)',
        'details' => [
            'Cubao, Quezon City',
            'Pre-school (Kinder & Prep)',
            'Consistent Honor, Valedictorian',
        ],
    ],
    [
        'school' => 'St. Bridget School Quezon City - (2010 to 2020)',
        'details' => [
            'Aurora Boulevard, Quezon City',
            'Elementary - Junior High school',
            'Consistent Honors (With Honors and With High Honors), Salutatorian',
        ],
    ],
    [
        'school' => 'University of the East Manila - (2020 to 2022)',
        'details' => [
            'Sampaloc, Manila',
            'Senior High School',
            'Science, Technology, Engineering, and Mathematics',
            'Consistent Honors, With Honors',
        ],
    ],
];

$skills = [
    'Adept in Photoshop, Lightroom and Premiere Pro',
    'Skilled in designing, the arts (visual and performing) and writing',
    'Proficient in Mathematics, English, Science',
    'Able to adapt easily to new environments',
    'Proficient in computer office applications',
    'Open to new ideas',
    'Experienced in leadership and can cooperate with others',
    'Communication skills',
    'Organization skills',
    'Analytical abilities',
    'Creativity  skills',
    'Project management skills',
    'Troubleshooting',
    'Resourcefulness',
    'Time Management',
];

$personal_info = [
    'Name' => 'Patricia Anne J. Dela cruz',
    'Email' => 'patriciannedlcrz@gmail.com',
    'Picture' => 'idpic.jpg',
    'Subtitle'=> 'Aspiring Software Engineer, BSITBA student at FEU Institute of Technology.'
];

$languages = [
    'C++' => 90,
    'HTML, CSS, JS' => 95,
    'Python' => 88,
    'Java' => 85,
];

$certificates = [
    'Information Technology Specialist in Python Programming',
    'CCNAv7: Introduction to Networks',
];

$seminars = [
    'ASTIX: Artificial Intelligence in Marketing and Advertising',
    'UI/UX iTamaraw Talks, Workshop & Competition',
    'InnovateSpark Challenges by FTIC: Design Thinking Sprint',
];
?>

<div class="resume-card">
    <div class="left-column">
        <div class="personal-info">
            <div class="profile">
                <img id="profile-picture" src="<?php echo $personal_info['Picture']; ?>" alt="Profile Picture">
                <h1><?php echo $personal_info['Name']; ?></h1>
            </div>
            <p><?php echo $personal_info['Subtitle']; ?></p>
            <p>Email: <?php echo $personal_info['Email']; ?></p>
            <p>Phone: 0928 860 3605</p>
        </div>

        <hr>

        <div class="education">
            <?php foreach ($education as $edu): ?>
                <h3><?php echo $edu['school']; ?></h3>
                <ul>
                    <?php foreach ($edu['details'] as $detail): ?>
                        <li><?php echo $detail; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="right-column">
    <div class="tabs">
        <button class="tablink" onclick="openTab('Skills', this)" id="defaultOpen">Skills</button>
        <button class="tablink" onclick="openTab('Languages', this)">Experience</button>
    </div>

    <div id="Skills" class="tabcontent">
        <h3>Skills</h3>
        <?php foreach ($skills as $skill): ?>
            <li><?php echo $skill; ?></li>
            <br>
        <?php endforeach; ?>
    </div>

    <div id="Languages" class="tabcontent">
        <h3>Languages</h3>
        <?php foreach ($languages as $language => $level): ?>
            <div class="language">
                <div class="language-name"><?php echo $language; ?></div>
                <div class="progress-bar">
                    <div class="progress-bar-inner" style="width: <?php echo $level; ?>%"></div>
                </div>
            </div>
        <?php endforeach; ?>

        <br>
        
        <h3>Certificates</h3>
        <?php foreach ($certificates as $certificate): ?>
            <li><?php echo $certificate; ?></li>
            <br>
        <?php endforeach; ?>

        <br>

        <h3>Seminars</h3>
        <?php foreach ($seminars as $seminars): ?>
            <li><?php echo $seminars; ?></li>
            <br>
        <?php endforeach; ?>
    </div>
</div>
</div>

<script src="./JS/script.js"></script>
</body>
</html>
