<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $table = 'auto';
    protected $primaryKey = 'targa';    //la targa è l'ID

    // targa non modificabile da un HTTP Request (Mass Assignment)
    protected $guarded = ['targa'];

    public $timestamps = false;

    protected $fillable = [
        'targa',
        'modello',
        'marca',
        'prezzoGiornaliero',
        'numeroPorte',
        'cilindrata',
        'tipoCambio',
        'optional',
        'disponibilita',
        'foto'
    ];

    protected $casts = [
        'targa'=>'string',

    ];

    // Restituisce tutte le auto
    public function getAllAuto()
    {
        return Auto::select()->get();
    }

    // Restituisce tutte le auto con un certo numero di posti (per il filtro aggiuntivo)
    public function getAutoByNumeroPosti($numeroPosti)
    {
        return Auto::where('numero_posti', $numeroPosti)->get();
    }

    // Restituisce tutte le auto entro un certo tipo di prezzo (per il primo filtro)
    public function getAutoByPrezzo($prezzoMinimo, $prezzoMassimo)
    {
        return self::whereBetween('prezzo_giornaliero', [$prezzoMinimo, $prezzoMassimo])->get();
    }

    public function getPrice(){

        return $this->price;
    }

}
