<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Http\File;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dir = [
            'public/images/ta_hien/',
            'public/images/royal/',
            'public/images/chua_tran_quoc/',
            'public/images/hang_buom/',
            'public/images/lang_bac/',
            'public/images/ho_guom/'
        ];
        for($k = 0; $k<count($dir); $k++)
        {
            if (is_dir($dir[$k])) {
                if ($dh = opendir($dir[$k])) {
                    while (($file = readdir($dh)) !== false) {
                        if ($file == '.' || $file == '..') {
                            continue;
                        }
                        else {
                            $path = $dir[$k].$file;;
                            if(file_exists($dir[$k].$file))
                            {
                                // Storage::put($dir[$k].$file, 'aaa');
                                $content = file_get_contents($dir[$k].$file);
                                Storage::put($dir[$k].$file, $content);
                                // $path = $file->store('public/images');
                                // $link = Storage::url($path);

                                \App\Models\Image::create([
                                    'travel_id' => $k+1,
                                    'image' => Storage::url($dir[$k].$file),
                                ]);
                            }
                            else {
                                {
                                    \App\Models\Image::create([
                                    'travel_id' => $k+1,
                                    'image' => $path,
                                ]);
                                }
                            }
                            
                            
                        }
                        
                    }
                    closedir($dh);
                }
            }

        }


    }
}
