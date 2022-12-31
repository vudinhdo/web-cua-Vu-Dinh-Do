        //tao database
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $conn = mysqli_connect($hostname,$username,$password);

        if($conn->connect_errno){
            die("ket noi that bai".$conn->connect_errno);
        }

        $sql = "CREATE DATABASE Shop_X";
        if($conn->query($sql)===TRUE){
            echo "tao database thanh cong";
        }else{
            echo "tao that bai";
        }
        $conn->close();

        // tao table

                $hostname = "localhost";
                $username = "root";
                $password = "";
                $database = "Shop_X";
                $conn = mysqli_connect($hostname,$username,$password,$database);
                mysqli_set_charset($conn,"utf8mb4");
                if($conn->connect_errno){
                    die("ket noi that bai".$conn->connect_errno);
                }

                $sql = "CREATE TABLE products (
                        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        title VARCHAR(255) NOT NULL ,
                        thumbnail LONGTEXT NOT NULL ,
                        description VARCHAR(255) NOT NULL,
                        category_id INT not null
                )";
                 $sql = "CREATE TABLE category (
                                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                title VARCHAR(255) NOT NULL ,
                                slug VARCHAR(255) NOT NULL
                        )";