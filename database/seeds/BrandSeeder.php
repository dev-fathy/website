<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {


$brands = ["ZARA","H&M","Mr Formal","Diva Divine","My Sister's Closet","Victoria's Secret","Rise Up","Planet Kid","Baby's Corner","Kid to Kid","Just You","Fitness Fashions","Fit Hub"];

  for ($item=0; $item < count($brands); $item++) { 
    foreach ($brands as $brand) {
      $brand = new Brand;
      $brand->name = $brands[$item];
      $brand->save();
      $item+=1;
      }        
       
}
    }
}
