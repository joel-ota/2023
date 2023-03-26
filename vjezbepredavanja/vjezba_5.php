<?php

    $users = [
        'prvi' => [
            'ime'=>'Marko',
            'prezime'=>'Markovic',
            'godine'=>'94',
            'spol'=>'muško',
        ],
        'drugi' => [
            'ime'=>'Ivana',
            'prezime'=>'Ivankovic',
            'godine'=>'169',
            'spol'=>'Žensko',
        ]
            ];

       unset ($users ['spol']);
  

  $users ['treci'] = [  'ime'=>'Marko',
                        'prezime'=>'Markovic',
                        'godine'=>'94'];
  print_r ($users);