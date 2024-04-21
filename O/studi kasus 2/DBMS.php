<?php

abstract class DBMS
{
   public function createConnection(): void{
   
   }
}
class MySQL extends DBMS{
   public function createConnection(): void{

   }
}
class MongoDB extends DBMS{
   public function createConnection(): void{

   }
}
class DBMSConnection{
   public function connect($dbms): void{

   }
}