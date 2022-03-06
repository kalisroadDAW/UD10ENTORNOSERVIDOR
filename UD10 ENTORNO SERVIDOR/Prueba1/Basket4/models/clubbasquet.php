<?php
    require_once "connection/Connection.php";

    class Jugador {

        public static function getAll() {
            $db = new Connection();
            $query = "SELECT * FROM clubbasket.jugador";
            $resultado = $db->query($query);
            $datos = [];
            if($resultado->num_rows) {
                while($row = $resultado->fetch_assoc()) {
                    $datos[] = [
                        'id' => $row['id'],
                        'nombreJugador' => $row['nombreJugador'],
                        'posicion' => $row['posicion'],
                        'numero' => $row['numero'],
                        'edad' => $row['edad'],
                        
                    ];
                }
                return $datos;
            }
            return $datos;
        }

        public static function getWhere($id) {
            $db = new Connection();
            $query = "SELECT *FROM clubbasket.jugador WHERE id=$id";
            $resultado = $db->query($query);
            $datos = [];
            if($resultado->num_rows) {
                while($row = $resultado->fetch_assoc()) {
                    $datos[] = [
                        'id' => $row['id'],
                        'nombreJugador' => $row['nombreJugador'],
                        'posicion' => $row['posicion'],
                        'numero' => $row['numero'],
                        'edad' => $row['edad'],
                    ];
                }
                return $datos;
            }
            return $datos;
        }

        public static function insert($id, $nombreJugador, $posicion, $numero, $edad) {
            $db = new Connection();
            $query = "INSERT INTO clubbasket.jugador (id, nombreJugador, posicion, numero, edad)
            VALUES('".$id."', '".$nombreJugador."', '".$posicion."', '".$numero."', '".$edad."')";
            $db->query($query);
            if($db->affected_rows) {
                return TRUE;
            }
            return FALSE;
        }

        public static function update($id, $nombreJugador, $posicion, $numero, $edad) {
            $db = new Connection();
            $query = "UPDATE clubbasket.jugador SET
            id='".$id."', nombreJugador='".$nombreJugador."', posicion='".$posicion."', numero='".$numero."', edad='".$edad."' 
            WHERE id=$id";
            $db->query($query);
            if($db->affected_rows) {
                return TRUE;
            }
            return FALSE;
        }

        public static function delete($id) {
            $db = new Connection();
            $query = "DELETE FROM clubbasket.jugador WHERE id=$id";
            $db->query($query);
            if($db->affected_rows) {
                return TRUE;
            }
            return FALSE;
        }

    }
