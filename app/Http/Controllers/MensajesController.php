public function index()
{
    $mensajes = Mensaje::all();
    //return view('mensajes.index', compact('mensajes'));
    return view('mensajes.index')->with('mensajes',$mensajes);
}