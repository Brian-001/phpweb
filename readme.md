## Creating a pure php dashboard styled with Tailwind CSS

### Basics
>Install PHP using [<b>Laragon<b>](https://laragon.org/download/) and follow the prompts ~ if you are on Windows. <br><br>
>You can also use [<b>Homebrew</b>](https://brew.sh/) to install PHP if you are on Mac or Linux <br><br>
>Install Database Management Tool such as [<b>TablePlus</b>](https://tableplus.com/). I highly recommend since it has a very awesome features including very nice GUI.<br><br>
>If you are using <b>Vs Code</b> you can install an extension called <b> PHP Server</b> to help you serve the project easily.

#### Once done, you are free to start your project and <b>Congrats!</b>.

#### Visit [<b>TailwindcssUiComponents</b>](https://tailwindui.com/components/application-ui/application-shells/stacked) and copy the basic HTML code for the dashboard. 
#### You can use Tailwind CDN link or install it. Again, it's a personal preference.

#### Seperate repetitive files and organise them in a folder such as <b>Partials<b> and use require to call them in the views. These files may include nav file, header file, footer file etc
#### Organise "HTML like" files in a folder let's say <b>views</b>
#### All these ensures there is minimal duplication and you stick into <b>DRY Principle</b>

## PDO (PHP Data Objects)
> <b>PDO</b> is a database access layer providing a uniform method to access multiple databases. 
### Key Features of PDO
#### <b>Database Independence:</b> PDO provides a uniform API for accessing various database management systems, such as MySQL, PostgreSQL, SQLite, and more. This means you can switch between different databases without changing your code significantly.<br>
#### <b>Prepared Statements:</b> PDO supports prepared statements, which helps prevent SQL injection attacks. Prepared statements separate SQL code from user input, making it more secure.<br>
#### <b>Error Handling:</b> PDO provides consistent error handling through exception handling. This allows you to catch database-related errors using try-catch blocks, making it easier to handle exceptions in your code.<br>
#### <b>Transaction Support: </b>PDO supports database transactions, which allows you to group multiple SQL statements into a single transaction. This ensures that either all the statements are executed, or none of them are, providing data integrity.

#### Example of a PDO code to connect mySQL database

        <?php
            try {
                $pdo = new PDO("mysql:host=localhost dbname=mydatabase", "username", "password");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Perform database operations here

            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        ?>
#### PDO provides a clean and consistent way to interact with database in PHP, making it a preferred choice for developers.

## DSN (Data Source Name)
#### In PHP DSN is a string that contains the information required to connect a database. <br>

#### DSN contains details such as database driver, host, database name, and other connection parameters. DSNs are commonly used when establishing a connection to a database using database-related extensions, such as PDO (PHP Data Objects).

#### Here is an example of a DSN for connecting to a MySQL database using PDO

``` $dsn = "mysql:host=localhost;dbname=mydatabase"; ```

#### When establishing a database connection using PDO or another database extension, you would pass the DSN as an argument to the connection function or constructor. For example:

        try {
            $pdo = new PDO($dsn, $username, $password);
            // Perform database operations here
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
#### The following line of code provides the results as an associative array rather than indexed hence removes duplication of results.

``` $osts = $tatement->fetchAll(PDO::FETCH_ASSOC)```

<br>

## Best naming conventions for PHP Class
#### i. PascalCase or StudlyCaps 
>Class names should be in PascalCase, also known as StudlyCaps
>Start each word with a capital letter, without underscores or dashes
>Example: ``` MyClass, DatabaseConnection, UserModel ```
>A file that only contain a class should have its' name in PascalCase ie ``` Database.php ```
#### ii. Namespace Prefix
>If your project uses namespaces (which is a good practice), include a namespace prefix that corresponds to the project or vendor
> Example: ```namespace MyProject; class MyClass { /*...*/ } ```

#### iii. Singular Noun
>Use a singular noun for class names to represent a single instance of the concept the class represents.
>Example: ``` Car, User, Post. ```

#### iv. Descriptive and Clear
>Choose a name that clearly describes the purpose or responsibility of the class.
>Avoid overly abbreviated or unclear names
>Example: ``` HttpRequestHandler ``` instead of ```HttpRH ```,  ``` UserProfile ``` instead of ``` UserProf  ```

#### v. Avoid Acronyms
>Minimize the use of acronyms, and if used, capitalize them consistently
>Example: ``` XmlParser ``` instead of ``` XMLParser ```, ``` HttpConnector ``` instead of ``` HTTPConnector ```

#### vi. Avoid Underscores
>Avoid using underscores in class names. Use PascalCase instead.
>Example: ```MyClass``` instead of ```My_Class ```, ```DatabaseConnection``` instead of ```Database_Connection```

## Scope Resolution Operator ( :: )
#### Scope resolution operator is used to access static methods or constants, as well as overridden properties or methods in a class. It allows you to access elements of a class without creating an instance of that class.

#### For example, if you have a static method or constant in a class, you can access it using the scope resolution operator:

        class MyClass {
            const MY_CONSTANT = 10;

            public static function myStaticMethod() {
                return "Static method called.";
            }
        }

        // Accessing a constant
        echo MyClass::MY_CONSTANT; // Output: 10

        // Calling a static method
        echo MyClass::myStaticMethod(); // Output: Static method called.

####  ```PDO::FETCH_ASSOC ``` in the context of PHP's PDO (PHP Data Objects) extension, it is used as part of the fetch method to specify the fetch style. ``` PDO::FETCH_ASSOC ``` is one of the fetch styles available in PDO and is used to fetch a row as an associative array.

#### Here's an example of using ``` PDO::FETCH_ASSOC ``` with PDO

    // Assuming you have a PDO connection $pdo

    $query = $pdo->prepare("SELECT column1, column2 FROM my_table");
    $query->execute();

    // Fetch a row as an associative array
    $result = $query->fetch(PDO::FETCH_ASSOC);

    print_r($result);







