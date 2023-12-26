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






