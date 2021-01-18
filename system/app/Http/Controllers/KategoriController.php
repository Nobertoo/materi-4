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
		$kategori->id = request('id');
		$kategori->nama_kategori = request('nama_kategori');
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
		$kategori->id = request('id');
		$kategori->nama_kategori = request('nama_kategori');
		$kategori->save();

		return redirect('kategori')->with('success','Data Berhasil Diubah');
	}

	function destroy(kategori $kategori){
		$kategori->delete();
		return redirect('kategori')->with('danger','Data Berhasil Dihapus');
	}

	function filter(){
		$nama_kategori = request('nama_kategori');
		$kategori->id = request('id');
		return view('kategori.index', $data);
	}
}