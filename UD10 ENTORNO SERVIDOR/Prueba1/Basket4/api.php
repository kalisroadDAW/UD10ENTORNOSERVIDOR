<?php
    require_once "models/clubbasquet.php";

    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            if(isset($_POST['id'])) {
                echo json_encode(Jugador::getWhere($_POST['id']));
            }
            else {
                echo json_encode(Jugador::getAll());
            }
            break;
        case 'POST':
            $datos = json_decode(file_get_contents('php://input'));
            if($datos != NULL) {
                if(Jugador::insert($datos->id, $datos->nombreJugador, $datos->numero, $datos->posicion, $datos->edad)) {
                    http_response_code(200);
                }
                else {
                    http_response_code(400);
                }
            }
            else {
                http_response_code(405);
            }
            break;

        case 'PUT':
            $datos = json_decode(file_get_contents('php://input'));
            if($datos != NULL) {
                if(Jugador::update($datos->id, $datos->nombreJugador, $datos->numero, $datos->posicion, $datos->edad)) {
                    http_response_code(200);
                }
                else {
                    http_response_code(400);
                }
            }
            else {
                http_response_code(405);
            }
            break;
        case 'DELETE':
            if(isset($_POST['id'])){
                if(Jugador::delete($_POST['id'])) {
                    http_response_code(200);
                }
                else {
                    http_response_code(400);
                }
            }
            else {
                http_response_code(405);
            }
            break;
        
        default:
            http_response_code(405);
            break;
    }