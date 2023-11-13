<?php
class modules extends mysqli
{
    public $conexion;

    public function __construct()
    {
        $this->conexion= new mysqli("localhost", "root", "", "cuam");
    }

    public function get_data()
    {
        $consulta = "SELECT * FROM citas";
        $result = $this->conexion->query($consulta);
        $array = [];
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $array[] = [
                "id"=> $row["id"],
                "nombrePPS"=> $row["nombrePPS"],
                "nombreALM"=> $row["nombreALM"],
                "grado"=> $row["grado"],
                "caso"=> $row["caso"],
                "modalidad"=> $row["modalidad"],
                "hora"=> $row["hora"],
                "dia"=> $row["dia"],
                "asunto"=> $row["asunto"],
             
            ];

        }
        
       }
      }