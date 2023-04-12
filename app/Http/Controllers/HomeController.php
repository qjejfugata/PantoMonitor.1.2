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
      
      $reference= $database->getReference('New_Entries')->getvalue();
      $references= $database->getReference('New_Entries');
      $powercheck= $database->getReference('Power')->getvalue();
      
//GOOD & BAD
       $tryulit =$database->getReference('New_Entries')->orderByChild('Assessment')->equalTo('Bad')->getvalue();
       $tryulits =$database->getReference('New_Entries')->orderByChild('Assessment')->equalTo('Good')->getvalue();
      
       $tryulitss =$database->getReference('New_Entries')->orderByChild('Date')->limitToLast(1)->getvalue();
  

  // JANK TIMELINE FUNCTIONS   
    $goodcounterjan = 0;
    $badcounterjan = 0;
    
    $goodcounterfeb = 0;
    $badcounterfeb = 0;
    
    $goodcountermar = 0;
    $badcountermar = 0;
    
    $goodcounterapr = 0;
    $badcounterapr = 0;
    
    $goodcountermay = 0;
    $badcountermay = 0;
    
    $goodcounterjune = 0;
    $badcounterjune = 0;
    
    $goodcounterjuly = 0;
    $badcounterjuly = 0;
    
    $goodcounteraug = 0;
    $badcounteraug = 0;
    
    $goodcountersep = 0;
    $badcountersep = 0;
    
    $goodcounteroct = 0;
    $badcounteroct = 0;
    
    $goodcounternov = 0;
    $badcounternov = 0;
    
    $goodcounterdec = 0;
    $badcounterdec = 0;
    
      //JAN
      foreach($tryulits as $item){
            if (strpos($item['Date'] ,'January') !== false) {
              $goodfound = true;
              if ($goodfound) {
                $goodcounterjan++;
                $goodfound = false;
              } 
          }
          }

      foreach($tryulit as $item){
        if (strpos($item['Date'] ,'January') !== false) {
          $badfound = true;
          if ($badfound) {
            $badcounterjan++;
            $goodfound = false;
            } 
          }
          }
      //


  //Feb
  foreach($tryulits as $item){
    if (strpos($item['Date'] ,'February') !== false) {
      $goodfound = true;
      if ($goodfound) {
        $goodcounterfeb++;
        $goodfound = false;
      } 
  }
  }

foreach($tryulit as $item){
if (strpos($item['Date'] ,'February') !== false) {  
  $badfound = true;
  if ($badfound) {
    $badcounterfeb++;
    $goodfound = false;
    } 
        }
         }

//

    //March
    foreach($tryulits as $item){
      if (strpos($item['Date'] ,'March') !== false) {
        $goodfound = true;
        if ($goodfound) {
          $goodcountermar++;
          $goodfound = false;
        } 
    }
    }
  
  foreach($tryulit as $item){
  if (strpos($item['Date'] ,'March') !== false) {  
    $badfound = true;
    if ($badfound) {
      $badcountermar++;
      $goodfound = false;
      } 
          }
           }
  //
  
  
           //April
    foreach($tryulits as $item){
      if (strpos($item['Date'] ,'April') !== false) {
        $goodfound = true;
        if ($goodfound) {
          $goodcounterapr++;
          $goodfound = false;
        } 
    }
    }
  
  foreach($tryulit as $item){
  if (strpos($item['Date'] ,'April') !== false) {  
    $badfound = true;
    if ($badfound) {
      $badcounterapr++;
      $goodfound = false;
      } 
          }
           }
  
//

           //May
           foreach($tryulits as $item){
            if (strpos($item['Date'] ,'May') !== false) {
              $goodfound = true;
              if ($goodfound) {
                $goodcountermay++;
                $goodfound = false;
              } 
          }
          }
        
        foreach($tryulit as $item){
        if (strpos($item['Date'] ,'May') !== false) {  
          $badfound = true;
          if ($badfound) {
            $badcountermay++;
            $goodfound = false;
            } 
                }
                 }
//

           //June
           foreach($tryulits as $item){
            if (strpos($item['Date'] ,'June') !== false) {
              $goodfound = true;
              if ($goodfound) {
                $goodcounterjune++;
                $goodfound = false;
              } 
          }
          }
        
        foreach($tryulit as $item){
        if (strpos($item['Date'] ,'June') !== false) {  
          $badfound = true;
          if ($badfound) {
            $badcounterjune++;
            $goodfound = false;
            } 
                }
                 }
//

           //July
           foreach($tryulits as $item){
            if (strpos($item['Date'] ,'July') !== false) {
              $goodfound = true;
              if ($goodfound) {
                $goodcounterjuly++;
                $goodfound = false;
              } 
          }
          }
        
        foreach($tryulit as $item){
        if (strpos($item['Date'] ,'July') !== false) {  
          $badfound = true;
          if ($badfound) {
            $badcounterjuly++;
            $goodfound = false;
            } 
                }
                 }

//

           //August
           foreach($tryulits as $item){
            if (strpos($item['Date'] ,'August') !== false) {
              $goodfound = true;
              if ($goodfound) {
                $goodcounteraug++;
                $goodfound = false;
              } 
          }
          }
        
        foreach($tryulit as $item){
        if (strpos($item['Date'] ,'August') !== false) {  
          $badfound = true;
          if ($badfound) {
            $badcounteraug++;
            $goodfound = false;
            } 
                }
                 }
    //  

           //September
           foreach($tryulits as $item){
            if (strpos($item['Date'] ,'September') !== false) {
              $goodfound = true;
              if ($goodfound) {
                $goodcountersep++;
                $goodfound = false;
              } 
          }
          }
        
        foreach($tryulit as $item){
        if (strpos($item['Date'] ,'September') !== false) {  
          $badfound = true;
          if ($badfound) {
            $badcountersep++;
            $goodfound = false;
            } 
                }
                 }
//


           //October
           foreach($tryulits as $item){
            if (strpos($item['Date'] ,'October') !== false) {
              $goodfound = true;
              if ($goodfound) {
                $goodcounteroct++;
                $goodfound = false;
              } 
          }
          }
        
        foreach($tryulit as $item){
        if (strpos($item['Date'] ,'October') !== false) {  
          $badfound = true;
          if ($badfound) {
            $badcounteroct++;
            $goodfound = false;
            } 
                }
                 }
//


           //November
           foreach($tryulits as $item){
            if (strpos($item['Date'] ,'November') !== false) {
              $goodfound = true;
              if ($goodfound) {
                $goodcounternov++;
                $goodfound = false;
              } 
          }
          }
        
        foreach($tryulit as $item){
        if (strpos($item['Date'] ,'November') !== false) {  
          $badfound = true;
          if ($badfound) {
            $badcounternov++;
            $goodfound = false;
            } 
                }
                 }
//


           //December
           foreach($tryulits as $item){
            if (strpos($item['Date'] ,'December') !== false) {
              $goodfound = true;
              if ($goodfound) {
                $goodcounterdec++;
                $goodfound = false;
              } 
          }
          }
        
        foreach($tryulit as $item){
        if (strpos($item['Date'] ,'December') !== false) {  
          $badfound = true;
          if ($badfound) {
            $badcounterdec++;
            $goodfound = false;
            } 
                }
                 }
  
  //
  
  
  
    
    
    
     // END FETCH DB
    
    
    
    
    
     $totalCount = $reference;
     $checkpower = $powercheck;
    $badCount = $tryulit;
    $GoodCount = $tryulits;

 
  $recentimgs = $tryulitss;
 
  
  foreach($recentimgs as $item){
    $recentimg = $item['Img'];
  }
  //}
    

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
        
      if ($user) {
      $userName = $user->displayName;
      } else {
      $userName = 'Guest';
      }
      
        return view('home',compact('userName','image','totalCount','badCount','GoodCount',
        'recentimgs','badcounterjan','goodcounterjan',
        'badcounterfeb','goodcounterfeb','badcountermar','goodcountermar',
        'badcounterapr','goodcounterapr','badcountermay','goodcountermay',
        'badcounterjune','goodcounterjune','badcounterjuly','goodcounterjuly',
        'badcounteraug','goodcounteraug','badcountersep','goodcountersep',
        'badcounteroct','goodcounteroct','badcounternov','goodcounternov',
        'badcounterdec','goodcounterdec','checkpower'));
      } catch (\Exception $e) {
        return $e;
      }

    }

  

   public function poweron()
    { 
      $database = app('firebase.database');
      $updatepowers= $database->getReference('Power');
      $updatepower= $database->getReference('Power/Status')->getvalue();
      $trypower = $updatepowers;

      
      if ($updatepower == '1') {
        $data = [
          'Status' => '0',];
          $updatepowers->update($data);
          return 'Prototype is off';
        } else {
          $data = [
            'Status' => '1',];
            $updatepowers->update($data);
            return 'Prototype is on';

    }
  }

  public function predicton()
  { 
    $database = app('firebase.database');
    $updatepowers= $database->getReference('Prediction');
    $updatepower= $database->getReference('Prediction/Status')->getvalue();
    $trypower = $updatepowers;

    
    if ($updatepower == '1') {
      $data = [
        'Status' => '0',];
        $updatepowers->update($data);
        return 'prediction is closed';
      } else {
        $data = [
          'Status' => '1',];
          $updatepowers->update($data);
          return 'prediction is in session';

  }
}

public function recordon()
{ 
  $database = app('firebase.database');
  $updatepowers= $database->getReference('StartEndVid');
  $updatepower= $database->getReference('StartEndVid/Status')->getvalue();
  $trypower = $updatepowers;

  
  if ($updatepower == '1') {
    $data = [
      'Status' => '0',];
      $updatepowers->update($data);
      return 'record is closed';
    
    } else {
      $data = [
        'Status' => '1',];
        $updatepowers->update($data);
        return 'record is in session';
      


}
}

  
}

    


    





