<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Fotos;

class UserController extends Controller
{
    public function getUser($office,$url){

        $user = User::where('url',$url)->first();

        if(!empty($user)){
            $id = $user['id'];

            $view = [
                '' => 'hipotecario', // Default
                'hipotecario' => 'hipotecario',
                'hipotecario-diamante' => 'hipotecario-diamante',
                'empresarial' => 'empresarial',
                'empresarial-diamante' => 'empresarial-diamante',
            ];

            $badges = [];
            if (!empty(@unserialize($user['badges']))) {
                foreach(@unserialize($user['badges']) as $badge){
                    $badges[$badge] = Certificaciones::where('id_badge',$badge)->get();
                }
            }

            $tips = [
                'jt_hHbdvUgU',
                'tUeyTWQXV8I',
            ];

            $blog = [
                [   'title'=>'Ventajas de cambiar tu hipoteca Infonavit por una bancaria',
                    'short_desc'=>'Si la deuda de tu pago de hipoteca en el Infonavit sigue creciendo, se está duplicando y no tienes certeza de cuándo la terminarás de pagar, este es el momento de pensar en cambiarla a una opción con la banca comercial.',
                    'url' => 'https://blog.socasesores.com/ventajas-de-cambiar-tu-hipoteca-infonavit-por-una-bancaria',
                    'image' => 'https://blog.socasesores.com/wp-content/uploads/2021/07/ventajas-de-cambiar-tu-hipoteca-infonavit-por-una-bancaria.jpg',],
                [   'title'=>'¿Cuáles son los requisitos para crédito hipotecario?',
                    'short_desc'=>'¿Es la primera vez que solicitas un financiamiento para vivienda? Entonces es importante que conozcas los requisitos para crédito hipotecario.',
                    'url' => 'https://blog.socasesores.com/cuales-son-los-requisitos-para-credito-hipotecario/',
                    'image' => 'https://blog.socasesores.com/wp-content/uploads/2021/06/23-enero.jpg',],
                [   'title'=>'¿Cómo funcionan los créditos hipotecarios Infonavit en UMAS?',
                    'short_desc'=>'En 2020 puedes decidir que la deuda y las mensualidades que pagas por tus créditos hipotecarios Infonavit dejen de incrementarse año con año. Conoce las opciones hipotecarias que no sólo te brindarán certeza de tu deuda, sino tasas fijas a lo largo de la vida del préstamo.',
                    'url' => 'https://blog.socasesores.com/como-funcionan-los-creditos-hipotecarios-infonavit-en-umas/',
                    'image' => 'https://blog.socasesores.com/wp-content/uploads/2021/07/como-funcionan-los-creditos-hipotecarios-infonavit-en-umas.jpg',],
            ];

            
            $data = [
                'user' => $user,
                'fotos' => Fotos::where('user_id',$id)->get(),
                'office' => Oficinas::where('id_office',$user['id_office'])->first(),
                'badges' => $badges,
                'blog' => $blog,
                'tips' => $tips,
            ];

            // Ordenamos los servicios por área
            $serv = Servicios::whereIn('id_service', @unserialize($user['servicios']))->get();
            if (!empty($serv)) {
                foreach ($serv as $service) {
                    $data['services'][$service['service_area']][] = $service;
                }
            }
            
            $data['user']['QRCode'] = ''; # $this->getQr($id);

            return view($view[$user['level']], $data);
        } else{
            $users = User::where('id_office',$office)->where('url','like','%'.$url.'%')->get();
            return view('fail',['users' => $users]);
        }

    }

    public function getQr($id){
        $user = User::where('id','=',$id)->first();
        $firstName = $user->name;
        $email = $user->email;
        
         $cellPhone = [
            'type' => 'work',
            'number' => $user->phone,
            'cellPhone' => true
        ];
        
        $phones = [$cellPhone];
        
        return QRCode::vCard($firstName, $email, $phones)
                    ->setErrorCorrectionLevel('H')
                    ->setSize(4)
                    ->setMargin(2)
                    ->svg();
    }
}
