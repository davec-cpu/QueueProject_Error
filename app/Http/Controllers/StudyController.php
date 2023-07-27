<?php

namespace App\Http\Controllers;

use App\Jobs\AddToDBJob;
use App\Jobs\NewJob;
use App\Jobs\SendConfirmEmailJob;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class StudyController extends Controller
{
    //
     
    public function  storeQueue()  {
        $name = 'Nguyen Hoai Duong';
        NewJob::dispatch($name);

        // $username = 'HoaiHien1290';
        // $email = 'Hien2005@gmail.com'; 
        // AddToDBJob::dispatch($username, $email);

        // SendConfirmEmailJob::dispatch($email);

          
    }
}
