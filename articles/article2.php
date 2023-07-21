<!DOCTYPE html>
<html>
<head>
    <title>Article 1 - PHP Syntax</title>
    <link rel="stylesheet" href="assets\css\style.css">
</head>
<body>
    <header>
        <img src="assets\css\images\logo.png" alt="Education Hub Logo">
        <h1>Basic Syntax</h1>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="article1.php">Installation</a></li>
            <li><a href="article2.php">Basic Syntax</a></li>
            <!-- Add more article links here -->
        </ul>
    </nav>
    <main>
        <h2>Syntax</h2>
        <p>
            <!-- Your article content goes here -->
            A PHP script can be placed anywhere in the document.</br>
            The default file extension for PHP files is ".php".</br>
            A PHP file normally contains HTML tags, and some PHP scripting code.</br>
        </p>
        <h3>Case Sensitivity</h3>
        <p>
            <!-- Your article content goes here -->
            In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.</br>
            Note: However; all variable names are case-sensitive!</br>
        </p>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Education Hub. All rights reserved.</p>
    </footer>
</body>
</html>
