<?php

namespace App\Http\Controllers;
use App\Models\Kategori;

class KategoriController extends Controller
{
	function index(){
		$data['list_kategori'] = kategori::all();
		return view('kategori.index', $data);
	}

	function create(){
		return view('kategori.create');
	}

	function store(){
		$kategori = new kategori;
		$kategori->nama_kategori = request('nama_kategori');
		$kategori->harga = request('harga');
		$kategori->berat = request('berat');
		$kategori->deskripsi = request('deskripsi');
		$kategori->stok = request('stok');
		$kategori->save();

		return redirect('kategori')->with('success','Data Berhasil Ditambahkan');
		// dd(request()->all());
	}

	function show(kategori $kategori){
		$data['kategori'] = $kategori;
		return view('kategori.show', $data);
	}

	function edit(kategori $kategori){
		$data['kategori'] = $kategori;
		return view('kategori.edit', $data);
	}

	function update(kategori $kategori){
		$kategori->nama_kategori = request('nama_kategori');
		$kategori->harga = request('harga');
		$kategori->berat = request('berat');
		$kategori->deskripsi = request('deskripsi');
		$kategori->stok = request('stok');
		$kategori->save();

		return redirect('kategori')->with('success','Data Berhasil Diubah');
	}

	function destroy(kategori $kategori){
		$kategori->delete();
		return redirect('produk')->with('danger','Data Berhasil Dihapus');
	}

	function filter(){
		$nama_kategori = request('nama_kategori');
		$stok = explode(",", request('stok'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		$data['list_produk'] = Produk::where('nama_produk', 'Like',  "$nama_produk")->get();
		$data['list_produk'] = Produk::whereIn('stok', $stok)->get();
		$data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
		$data['nama_produk'] = $nama_produk;
		$data['stok'] = request('stok');
		return view('produk.index', $data);
	}
}