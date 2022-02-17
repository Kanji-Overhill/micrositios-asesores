<?php
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Fotos;

    function getQr($id){
        $user = User::where('id','=',$id)->first();
        $firstName = $user->name;
        $email = $user->email;
        $wordAddress = [
           'type' => 'work',
           'pref' => false,
           'street' => '',
           'city' => '',
           'state' => '',
           'country' => '',
           'zip' => ''
        ];
        
        $addresses = [$wordAddress];
        $cellPhone = [
            'type' => 'work',
            'number' => $user->phone,
            'cellPhone' => true
        ];

        
        $phones = [$cellPhone];
        
        return QRCode::vCard($firstName, "", "", $email, $addresses, $phones)
                    ->setErrorCorrectionLevel('L')
                    ->setSize(4)
                    ->setMargin(2)
                    ->svg();
    }

