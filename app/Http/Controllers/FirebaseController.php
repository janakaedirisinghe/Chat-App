<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

use Illuminate\Http\Request;

class FirebaseController extends Controller
{
   public function index(){

       $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/laravel-firebase-ef8e1-firebase-adminsdk-g95ql-d114d21d73.json');
       $firebase = (new Factory)
           ->withServiceAccount($serviceAccount)
           ->create();
       $db = $firebase->getDatabase();

       $db->getReference('users')->set([
          'id' => 2,
          'name' => 'janaka',
           'email' => 'janaka@gmail.com',
           'age' => 23,
           'emails' => [
               'support' => 'supsaport@domain.tld',
               'sales' => 'sales@domain.tld',
           ],


       ]);
       $reference = $db->getReference('users','config');
       $snapshot = $reference->getSnapshot();

       $value = $snapshot->getValue();

       dd($value);

       echo '<h1>data insereted</h1>';

   }
}
