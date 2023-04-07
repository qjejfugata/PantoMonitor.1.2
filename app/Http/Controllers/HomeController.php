<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Auth as FirebaseAuth;
use Kreait\Firebase\Auth\SignInResult\SignInResult;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Exception\FirebaseException;
use Kreait\Firebase\Database;




use Session;

class HomeController extends Controller
{   
  
  
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    
     
    }
 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
      // FETCH DB
      $database = app('firebase.database');
      
      
      $reference= $database->getReference('Entries')->getValue();
      $Assesment ='Good';
      $Date = '03/24/2023';
      $img = "newImga01";
      $Time = "18:30";
      
$post = [
  'Assesment' => $Assesment,
  'Date' => $Date,
  'Img' => $img,
  'Time' => $Time,
];


      //$post = $reference->push($post);
      // END FETCH DB

      function countDB($arr)
      {
        
        for ($row = 0; $row < 4; $row++) {
          for ($col = 0; $col < 1; $col++) {
            array_push($newArray,$arr[$row][$col]);
        }
        $arrcounted = array_sum(array_map("count",$newArray));
        return  $arrcounted;
      }

    }

   //$trylang = countDB($reference);
    //$trylang = $reference;
      $recentimg = 'newImage36';



      // IMAGE FUNCTION
        $imageReference = app('firebase.storage')->getBucket()->object("images/{$recentimg}.jpg");
        $expiresAt = new \DateTime('tomorrow');
        if ($imageReference->exists()) {
          $image = $imageReference->signedUrl($expiresAt);
        } else 
          $image = 'https://firebasestorage.googleapis.com/v0/b/pd-last-dance.appspot.com/o/images%2FnewImage22.jpg?alt=media&token=07c89db0-6285-40d2-a4e4-a5d5857bce09';
      // END IMAGE FUNCTION    
     

      //   FirebaseAuth.getInstance().getCurrentUser();
      try {
        $uid = Session::get('uid');
        $user = app('firebase.auth')->getUser($uid);
      
        return view('home',compact('image'));
      } catch (\Exception $e) {
        return $e;
      }

    }

  


    }


    


    





