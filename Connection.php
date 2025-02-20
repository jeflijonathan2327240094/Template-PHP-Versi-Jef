<?php 
class Connection {
    private string $host = "localhost";
    private string $user = "root";
    private string $password = "";
    private string $database = "belajar_mysql";
   
    public function connection():void{
        $conn = mysqli_connect($host, $user, $password, $database);
        
        if (!$conn){
            echo "
            <script>
                console.log('Tidak ada koneksi!')
            </script>
            ";
        }
    }
}

?>