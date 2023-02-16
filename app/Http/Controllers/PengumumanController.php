<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Traits\Table;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use Table;
    protected $model = Pengumuman::class;
    public function index()
    {
        $info = Pengumuman::orderBy('updated_at','DESC')->paginate(10);
        return view('pengumuman',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formpengumuman');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //thumbnail
        $file = $request->file('thumbnail');
        $nama_thumbnail = rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path("screenshot"), $nama_thumbnail);
        $data['thumbnail'] = $nama_thumbnail;
        //file
        $file = $request->file('file');
        $nama_file = rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path("dokumen"), $nama_file);
        $data['file'] = $nama_file;
        $data = Pengumuman::create($data);
        return redirect()->back()->with(['success' => 'Data berhasil disimpan.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
