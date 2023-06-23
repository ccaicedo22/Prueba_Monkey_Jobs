<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeDocument;

class TypeDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arrayTypeDocuments = [
             "typeDocument1" => array(
                "description" => "Registro Civil",
             ),
             "typeDocument2" => array(
                 "description" => "Tarjeta de Identidad",
             ),
             "typeDocument3" => array(
                "description" => "Cédula de Ciudadanía",
            ),
            "typeDocument4" => array(
                "description" => "Cédula de Extranjeria",
            ),
             
         ];
         foreach ($arrayTypeDocuments as $typeDocument){
             $typeDocumentAdd = new TypeDocument();
             if (is_array($typeDocument)) {
                 foreach ($typeDocument as $key => $value){
                     $typeDocumentAdd -> $key = $value;
                 }
                 $typeDocumentAdd -> save();
             }
         }
     }
 }