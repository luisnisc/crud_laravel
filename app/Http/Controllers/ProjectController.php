<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Usuario;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuarios = Usuario::all();
        return view('projects.create', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo'       => 'required|max:255',
            'horas_previstas'       => 'required|integer',
            'fecha_de_comienzo'  => 'required|date',
            // Agrega si recibes usuario_id desde el formulario:
            'usuario_id' => 'required|exists:usuarios,id',
        ]);

        Project::create($validated);

        return redirect()->route('app')->with('success', 'Proyecto creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        // Puedes mostrar el proyecto si es necesario
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'titulo'       => 'required|max:255',
            'horas_previstas'       => 'required|integer',
            'fecha_de_comienzo'  => 'required|date',
        ]);

        $project->update($validated);

        return redirect()->route('app')->with('success', 'Proyecto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('app')->with('success', 'Proyecto eliminado correctamente.');
    }
}
