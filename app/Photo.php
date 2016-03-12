<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Photo extends Model
{
    protected $fillable = [
        'path',
        'alt',
        'desc'
    ];

    /**
     * Get the groups associated with the given photo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function groups(){
        return $this->belongsToMany('App\Group')->withTimestamps();
    }

    /**
     * Inserisce nel Db le informazioni relative alle foto nella cartella $folderName per
     * inserirle nella Gallery
     *
     * @param $folderName
     * @param $label
     */
    public function syncGalleryFolder($folderName, $label)
    {
        //prendo il gruppo di foto con il nome della cartella se esiste
        $group = Group::where('name','like',$folderName)->get(array('id'));
        //altrimenti lo creo
        if($group->isEmpty())
        {
            $group = Group::create(['name'=>$folderName,'label'=>$label]);
            $group->save();
            //$group dovrà essere di tipo array per passarlo alla funzione sync come parametro
            $group = $group->toArray();
        }

        //directory in cui cerco i file
        $directory = 'public/img/gallery/'.$folderName.'/';

        //per ogni file di tipo immagine contenuto nella directory salvo un record nella tabella photos
        foreach (glob($directory."*.{jpg,JPG,jpeg,JPEG,png,PNG}", GLOB_BRACE) as $filename) {

                //crea un oggetto Photo da salvare nel Db
                $photo = Photo::create(['path'=>'img/gallery/'.$folderName.'/'.basename($filename),'desc'=>$label.' foto','alt'=>$label.' foto ']);
                $photo->save();
                //aggiunge la relazione con il gruppo alla foto
                $photo->groups()->sync($group);

                echo "- basename($filename) Salvato nel DB!". "\n\n";
        }

    }
}
