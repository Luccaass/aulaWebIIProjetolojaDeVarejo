<?php
namespace APP\Controller;

use APP\Model\Address;
use APP\Utils\Redirect;

require '../../vendor/autoload.php';
if(empty($_POST)){
    session_start();
    Redirect::redirect(
        type:'error',
        message:"Requisição Inválida!"
    );
}
$cnpj = $_POST['cnpj'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = new Address(
    publicPlace: $_POST['publicPlace'],
    numberOfStreet: $_POST['numberOfStreet'],
    complement: $_POST['complement'],
    neighborhood: $_POST['neighborhood'],
    city: $_POST['city'],
    zipCode: $_POST['zipCode']
);
$error = array();