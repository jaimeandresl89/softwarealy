<?php 
class usuariosClass{
private $id_usu;private $nom;private $ape;private $edad;private $sexo;private $dir;private $cel;private $email;private $empresa;private $cargo;private $dep;private $ciudad;private $estado;private $rol;
function __construct() { 

 }
public function getId_usu(){
return $this->id_usu;
}
public function getNom(){
return $this->nom;
}
public function getApe(){
return $this->ape;
}
public function getEdad(){
return $this->edad;
}
public function getSexo(){
return $this->sexo;
}
public function getDir(){
return $this->dir;
}
public function getCel(){
return $this->cel;
}
public function getEmail(){
return $this->email;
}
public function getEmpresa(){
return $this->empresa;
}
public function getCargo(){
return $this->cargo;
}
public function getDep(){
return $this->dep;
}
public function getCiudad(){
return $this->ciudad;
}
public function getEstado(){
return $this->estado;
}
public function getRol(){
return $this->rol;
}
public function setId_usu($id_usu){
$this->id_usu = $id_usu;
}
public function setNom($nom){
$this->nom = $nom;
}
public function setApe($ape){
$this->ape = $ape;
}
public function setEdad($edad){
$this->edad = $edad;
}
public function setSexo($sexo){
$this->sexo = $sexo;
}
public function setDir($dir){
$this->dir = $dir;
}
public function setCel($cel){
$this->cel = $cel;
}
public function setEmail($email){
$this->email = $email;
}
public function setEmpresa($empresa){
$this->empresa = $empresa;
}
public function setCargo($cargo){
$this->cargo = $cargo;
}
public function setDep($dep){
$this->dep = $dep;
}
public function setCiudad($ciudad){
$this->ciudad = $ciudad;
}
public function setEstado($estado){
$this->estado = $estado;
}
public function setRol($rol){
$this->rol = $rol;
}
}