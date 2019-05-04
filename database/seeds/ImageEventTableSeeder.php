<?php

use Illuminate\Database\Seeder;

class ImageEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $dir = [
            'public/image_events/ta_hien/',
            'public/image_events/royal/',
            'public/image_events/chua_tran_quoc/',
            'public/image_events/hang_buom/',
            'public/image_events/lang_bac/',
            'public/image_events/ho_guom/'
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

                                \App\Models\ImageEvent::create([
                                    'event_id' => $k+1,
                                    'image' => Storage::url($dir[$k].$file),
                                ]);
                            }
                            else {
                                {
                                    \App\Models\ImageEvent::create([
                                    'event_id' => $k+1,
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
