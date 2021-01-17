<?php 

namespace App\Models\Traits\Relations;
use App\Model\User;

trait ProdukRelations{

		function getHargaStringAttribute(){
		return "Rp. ".number_format($this->attributes['harga']);
	}

}
