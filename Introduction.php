<?php
// PHP: Introduction
// PHP is a server-side scripting language designed for web development. It is embedded within HTML and executes on the server, generating dynamic content for web pages.

// PHP: Syntax
// PHP code is enclosed within <?php and ?> tags. It supports statements, functions, and loops similar to other programming languages.

// PHP: Variables
// Variables in PHP are declared with a $ sign, followed by the variable name. They are dynamically typed, meaning they can store different data types.

$exampleVariable = "Hello, PHP!";

// PHP: Statements
// PHP statements end with a semicolon (;). They are used to execute actions such as variable assignment, function calls, and output.

echo $exampleVariable;

// PHP: Operators
// PHP provides arithmetic, comparison, logical, and assignment operators to perform operations on variables and values.

$result = 10 + 5; // Arithmetic operator

// PHP: Decision Making
// PHP supports conditional statements like if, if-else, and switch for decision-making.

if ($result > 10) {
    echo "Result is greater than 10.";
}

// PHP: Loops
// Loops in PHP include for, while, and foreach, allowing repetitive execution of code blocks.

for ($i = 0; $i < 5; $i++) {
    echo "Iteration $i";
}

// PHP: Arrays
// PHP arrays can be indexed or associative, used to store multiple values.

$colors = array("Red", "Green", "Blue");
echo $colors[0]; // Output: Red

// PHP: Strings
// Strings in PHP can be manipulated with various functions like strlen, strpos, and concatenation using the dot (.) operator.

echo "String length: " . strlen("PHP");

// PHP: Forms
// PHP processes HTML form data using $_GET and $_POST superglobals.

?>

<!-- Example HTML Form -->
<form method="post" action="">
    <input type="text" name="username" />
    <input type="submit" value="Submit" />
</form>

<?php
// PHP: GET and POST Methods
// $_GET retrieves data sent via the URL, while $_POST retrieves data sent in the request body.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    echo "Username: $username";
}

// PHP: Functions
// Functions in PHP are reusable blocks of code defined with the function keyword.

function greet($name) {
    return "Hello, $name!";
}
echo greet("World");

// PHP: Cookies
// Cookies are used to store user data on the client-side. They are set with the setcookie() function.

setcookie("user", "JohnDoe", time() + (86400 * 30), "/");

// PHP: Sessions
// Sessions store data on the server to maintain user state. They are initialized with session_start().

session_start();
$_SESSION["user"] = "JohnDoe";
echo $_SESSION["user"];

// PHP and MySQL: Introduction to MySQL
// MySQL is a relational database management system (RDBMS) used to store and manage data for web applications.

// PHP and MySQL: Connecting to MySQL Database
// PHP connects to MySQL using mysqli_connect() or PDO.

$conn = mysqli_connect("localhost", "username", "password", "database");

// PHP and MySQL: Creation, Insertion, Deletion, and Retrieval of MySQL Data
// Data operations are performed using SQL queries executed with PHP.

$sql = "CREATE TABLE Users (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255))";
mysqli_query($conn, $sql);

$sql = "INSERT INTO Users (name) VALUES ('John Doe')";
mysqli_query($conn, $sql);

$sql = "SELECT * FROM Users";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["name"];
}

// PHP and XML: Introduction
// PHP can process XML data, which is a format for storing and transporting structured information.

// PHP and XML: XML Parsers
// PHP provides XML parsers like SimpleXML and DOM to read and manipulate XML data.

$xml = simplexml_load_string("<note><to>Tove</to></note>");
echo $xml->to;

// PHP and XML: XML DOM
// The DOMDocument class in PHP allows advanced manipulation of XML documents.

$doc = new DOMDocument();
$doc->loadXML("<note><to>Tove</to></note>");
echo $doc->getElementsByTagName("to")->item(0)->nodeValue;
?